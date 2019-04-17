<?php
class nilai_fn{
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    
    public function sem_gasal($nama_table)
    {
        try {
            $this->db->prepare('SELECT * FROM '.$nama_table.' WHERE(nis = :nis AND sem = :sem)');
            $this->db->bind('nis',$_SESSION['login']);
            $this->db->bind('sem','tengah');
            $this->db->execute();
            if ($this->db->rowCount() > 0) {
                return $this->db->queryAll();
            } else {
                return ['0'=>['nilai belum ada'=>'0']];
            }  
        } catch (\Throwable $th) {
            // throw $th;
            return ['0'=>['nilai belum ada'=>'0']];
        }
    }
    public function sem_genap($nama_table)
    {
        try {
            $this->db->prepare('SELECT * FROM '.$nama_table.' WHERE(nis = :nis AND sem = :sem)');
            $this->db->bind('nis',$_SESSION['login']);
            $this->db->bind('sem','akhir');
            $this->db->execute();
            if ($this->db->rowCount() > 0) {
                return $this->db->queryAll(); 
            } else {
                return ['0'=>['nilai belum ada'=>'0']];
            }  
        } catch (\Throwable $th) {
            // throw $th;
            return ['0'=>['nilai belum ada'=>'0']];
        }
    }

    // fun utama
    public function ambil_nilai($kelas = 'x',$semester = '1',$jurusan = 'rpl')
    {   
        $nama_table = 'nilai_siswa_'.$kelas.'_'.$semester.'_'.$jurusan;
        $nilai = ['sem_gasal'=> $this->sem_gasal($nama_table),
                  'sem_genap'=>$this->sem_genap($nama_table),
                  'semester'=>$semester];
        $unuse = ['id','nis','sem'];
        for ($i=0; $i <= count($unuse)-1; $i++) { 
            unset($nilai['sem_gasal'][0][$unuse[$i]]);
            unset($nilai['sem_genap'][0][$unuse[$i]]);
        }
        return $nilai;
    }
}
