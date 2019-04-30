<?php
class admin_fn{
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    // TODO:def func
    public function dateHtml($d)
    {
        return str_replace('-','/',date("m-d-Y",strtotime($d)));
    }
    private function redirB()
    {
        echo '<script>window.location.replace(history.go(-1));</script>';
        die();
    }


    // pagination
    public function pagination($t)
    {
        $this->db->prepare("SELECT * FROM :table");
        $this->db->bind('table',$t);
        $this->db->execute();
        $jumlahberita = $this->db->rowCount();
        return ceil($jumlahberita / 25);
    }

    //TODO:list edit semua
    public function listEdit($p,$t,$o)
    {
        $awaldata = ($p * 25) - 25;
        $this->db->prepare("SELECT * FROM $t ORDER BY :order DESC LIMIT :page ,25");
        $this->db->bind('order',$o);
        $this->db->bind('page',$awaldata);
        return $this->db->queryAll();
    }
    // TODO:ambil semua | untuk update
    public function getAny($i,$id,$t)
    {
        $this->db->prepare("SELECT * FROM $t WHERE( $i = :id)");
        $this->db->bind('id',$id);
        return $this->db->queryOne();
    }
    // TODO:delete semua 
    public function deleteAny($t,$p,$i)
    {
        $this->db->prepare("DELETE FROM $t WHERE( $p = :id)");
        $this->db->bind('id',$i);

        $this->db->execute();
        $this->redirB();
    }


    // siswa
    // FIXME:update siswa
    public function updateSiswa($nis)
    {
        $this->db->prepare("UPDATE data_siswa SET nama = :nama ,
                                                kelas = :kelas ,
                                                jurusan = :jurusan ,
                                                nisn = :nisn ,
                                                jenis_kelamin = :kelamin ,
                                                agama = :agama ,
                                                tempat_lahir = :tempat-tanggal ,
                                                tanggal_lahir = :tempat-lahir  WHERE nis = $nis");
        
        $this->db->bind('nama',$_POST['nama']);
        $this->db->bind('kelas',$_POST['kelas']);
        $this->db->bind('jurusan',$_POST['jurusan']);
        $this->db->bind('nisn',$_POST['nisn']);
        $this->db->bind('kelamin',$_POST['kelamin']);
        $this->db->bind('agama',$_POST['agama']);
        $this->db->bind('tempat-tanggal',$_POST['tempat-tanggal']);
        $this->db->bind('tempat-lahir',$_POST['tanggal-lahir']);
        
        $this->db->execute();

        if($this->db->rowCount() > 0) {
            $this->redirB();
        }else{
            echo 'err';
        }
    }
    // tambah siswa
    public function tambahSiswa()
    {
        $this->db->prepare("INSERT INTO data_siswa VALUES ( :nis,:nisn,:nama,:kelas,:jurusan,:kelamin,:agama,:tanggal,:tempat,'' )");
        
        $this->db->bind('nis',$_POST['nis']);
        $this->db->bind('nisn',$_POST['nisn']);
        $this->db->bind('nama',$_POST['nama']);
        $this->db->bind('kelas',$_POST['kelas']);
        $this->db->bind('jurusan',$_POST['jurusan']);
        $this->db->bind('kelamin',$_POST['kelamin']);
        $this->db->bind('agama',$_POST['agama']);
        $this->db->bind('tempat',$_POST['tempat-tanggal']);
        $this->db->bind('tanggal',$_POST['tanggal-lahir']);

        $this->db->execute();

        if($this->db->rowCount() > 0) {
            $this->redirB();
        }else{
            echo 'err';
        }
    }
    // tambah event
    public function tambahEvent()
    {
        $this->db->prepare("INSERT INTO event VALUES ('',:nama,:tempat,:mulai,:selesai,:desk)");
        $this->db->bind('nama',$_POST['nama']);
        $this->db->bind('tempat',$_POST['tempat']);
        $this->db->bind('mulai',$_POST['tanggal-mulai']);
        $this->db->bind('selesai',$_POST['tanggal-selesai']);
        $this->db->bind('desk',$_POST['deskripsi']);

        $this->db->execute();

        if($this->db->rowCount() > 0) {
            // $this->redirB();
        }else{
            echo 'err';
        }
    }
}
