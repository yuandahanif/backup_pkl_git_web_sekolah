<?php
class profile_kanan  
{
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    public function getProfile()
    {
        $this->db->prepare('SELECT nama,avatar_user,quotes,role FROM akun_siswa,data_siswa  WHERE( data_siswa.nis = :nis AND akun_siswa.nis = :nis)');
        $this->db->bind('nis',$_SESSION['login']);
        return $this->db->queryOne();
    }

    public function pagination()
    {
        $this->db->prepare("SELECT * FROM event");
        $this->db->execute();
        $jumlahberita = $this->db->rowCount();
        return ceil($jumlahberita / 8);
    }
    public function list_event($p)
    {
        $bulan_mulai = [];
        $tanggal_mulai = [];
        $tanggal_selesai = [];
        $awaldata = ($p * 8) - 8;
        $this->db->prepare("SELECT * FROM event ORDER BY id_event DESC LIMIT :page ,8");
        $this->db->bind('page',$awaldata);
        $event = $this->db->queryAll();
        
        foreach ($event as $no => $data) {
            $bulan = explode('-',$data['tanggal_mulai_event']);
            $bulan_mulai[] .= $bulan[1];
            $tanggal_mulai[] .= $bulan[2];
        }
        // SELESAI
        foreach ($event as $no => $data) {
            $bulan_s = explode('-',$data['tanggal_selesai_event']);
            $tanggal_selesai[] .= $bulan_s[2];
        }
        $event['tanggal']['tanggal_mulai'] = $tanggal_mulai;
        $event['tanggal']['tanggal_selesai'] = $tanggal_selesai;
        $event['tanggal']['bulan_mulai'] = $bulan_mulai;
        return $event;
    }
    

    // yang di profile kanan
    public function getEvent()
    {
        $bulan_mulai = [];
        $tanggal_mulai = [];
        $this->db->prepare('SELECT * FROM event ORDER BY id_event DESC LIMIT 12');
        $event = $this->db->queryAll();
        foreach ($event as $no => $data) {
            $bulan = explode('-',$data['tanggal_mulai_event']);
            $bulan_mulai[] .= $bulan[1];
            $tanggal_mulai[] .= $bulan[2];
        }
        $event['tanggal']['tanggal_mulai'] = $tanggal_mulai;
        $event['tanggal']['bulan_mulai'] = $bulan_mulai;
        return $event;
    }
}
