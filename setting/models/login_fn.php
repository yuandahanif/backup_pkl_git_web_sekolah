<?php
class login_fn{
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    public function login($user,$password)
    {
        $this->db->prepare('SELECT nis FROM akun_siswa WHERE(username = :username AND password = :password AND status = :status)');
        $this->db->bind('username',$user);
        $this->db->bind('password',$password);
        $this->db->bind('status','verified');
        $data = $this->db->queryOne();
        if ($this->db->rowCount() > 0 ) {
            $this->_setAtrPelengkap($data['nis']);
            header('Location: '.BASEURL.'berita',false);
        }else {
            Flasher::setFlash('Logn gagal!');
            header('Location: '.BASEURL.'login');
        }
    }
    // set class and jurusan
    protected function _setAtrPelengkap($nis)
    {
        $this->db->prepare('SELECT * FROM data_siswa WHERE(nis = :nis)');
        $this->db->bind('nis',$nis);
        $data = $this->db->queryOne();
        // var_dump($data);
        // $nis = implode('',$data['nis']);
        // $kelas = implode('',$data['kelas']);
        // $jurusan = implode('',$data['jurusan']);
            $_SESSION['login'] = $data['nis'];
            $_SESSION['kelas'] = strtolower($data['kelas']);
            $_SESSION['jurusan'] = $data['jurusan'];
    }
    // logout
    public function logout()
    {
        session_destroy();
        session_unset();
        header('Location: '.BASEURL);
        exit();
    }



    // admin here
    public function loginAdmin($user,$pass)
    {
        $this->db->prepare('SELECT * FROM akun_admin WHERE(username = :username AND password = :password)');
        $this->db->bind('username',$user);
        $this->db->bind('password',$pass);
        $this->db->execute();
        if ($this->db->rowCount() > 0 ) {
            if (isset($_SESSION['login'])) {
                header('Location: '.BASEURL.'landing');
            }else{
                $_SESSION['admin_login'] = 'login';
                header('Location: '.BASEURL.'_mimindev/dashboard',false);
            }
        }else {
            header('Location: '.BASEURL.'landing');
        }
    }
}
