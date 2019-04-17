<?php
class profile_siswa_fn 
{
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function getSiswa()
    {
        $this->db->prepare('SELECT * FROM akun_siswa,data_siswa  WHERE( data_siswa.nis = :nis AND akun_siswa.nis = :nis)');
        $this->db->bind('nis',$_SESSION['login']);
        return $this->db->queryOne();
    }
}
