<?php
class cek_login  
{
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    public function cek_login()
    {
        if (isset($_SESSION['login'])) {
            $this->db->prepare('SELECT nis FROM akun_siswa WHERE( nis = :nis)');
            $this->db->bind('nis',$_SESSION['login']);
            $login = implode('',$this->db->queryOne());
            if ($login === $_SESSION['login']) {
                // header('Location: '.BASEURL.'berita',false);
                // do nothing
                return 'login';
            }
        }else{
            return 0;
        }
    }
}
