<?php
class edit_user{
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    
    public function getUser()
    {
        $this->db->prepare('SELECT username,email,quotes FROM akun_siswa,data_siswa WHERE (data_siswa.nis = :nis AND akun_siswa.nis = :nis)');
        $this->db->bind('nis',$_SESSION['login']);
        return $this->db->queryOne();
    }

    // update
    public function updateUser($url='berita')
    {
        // updateFoto
        $foto = (isset($_FILES['foto-baru'])) ? $this->_uFoto($_FILES['foto-baru']) : false ;
        // updateQuotes
        $quotes = (isset($_POST['quotes'])) ? $this->_uQuotes($_POST['quotes']) : false ;
        // updateUsername
        $user = (isset($_POST['username'])) ? $this->_uUser($_POST['username']) : false ;
        // updateEmail
        $email = (isset($_POST['email'])) ? $this->_uEmail($_POST['email']) : false ;
        
        // update password
        if (isset($_POST['old-password']) && isset($_POST['new-password']) && isset($_POST['new-password-conf'])) {
            if ( $this->_verifPass($_POST['old-password'])) {
                if ($_POST['new-password'] === $_POST['new-password-conf']) {
                    if ($this->cekPassword($_POST['new-password'])) {
                        $this->db->prepare('UPDATE akun_siswa SET password = :password WHERE (nis = :nis)');
                        $this->db->bind('nis',$_SESSION['login']);
                        $this->db->bind('password',$_POST['new-password']);
                        $this->db->execute();
                        if ($this->db->rowCount() > 0) {
                            $pass = true;
                        }else{
                            $pass = false;
                        }
                    }
                }
            }
        }

        if ($quotes || $foto || $user || $email || (isset($pass) && $pass = true)) {
            header('Location: '.BASEURL.$url);
            die();
            // return true;
        }
        else{
            header('Location: '.BASEURL.$url);
            die();
        }
    }

    // getOldPass
    protected function _verifPass($pass)
    {
        $this->db->prepare('SELECT password FROM akun_siswa WHERE ( nis = :nis and password = :pass)');
        $this->db->bind('nis',$_SESSION['login']);
        $this->db->bind('pass',$pass);
        $this->db->execute();
        if($this->db->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }
    public function cekPassword($password)
    {   
        $regex_password = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{5,})/';
        if (preg_match($regex_password,$password)) {
            return true;
        }else{
            return false;
        }
    }
    // update foto
    protected function _uFoto($foto)
    {
        if (isset($foto) && $foto != null) {
            $ekstensi_y =['jpg','png','jpeg'];
            $nama = $foto['name'];
            $ukuran = $foto['size'];
            $err = $foto['error'];
            $tmp = $foto['tmp_name'];
            $eks_asli = explode('.',$nama);
            $eks = strtolower(end($eks_asli));
            $nama_baru = uniqid().'.'.end($eks_asli);
            if (in_array($eks,$ekstensi_y) && $err == 0) {
                if ($ukuran < 5044070) {
                    if ($this->_hapusPrevFoto()) {
                        move_uploaded_file($tmp, 'user/profile/img/'. $nama_baru);
                        $this->db->prepare('UPDATE akun_siswa SET avatar_user = :img WHERE nis = :nis');
                        $this->db->bind('img',$nama_baru);
                        $this->db->bind('nis',$_SESSION['login']);
                        $this->db->execute();
                        return true;
                    }
                }
            }
        }else{
            return false;
        }
    }
    // ambil pef foto dan delete
    protected function _hapusPrevFoto()
    {
        $this->db->prepare('SELECT avatar_user FROM akun_siswa WHERE nis = :nis');
        $this->db->bind('nis',$_SESSION['login']);
        $foto = $this->db->queryOne();
            if (file_exists('user/profile/img/'.$foto['avatar_user'] || $foto['avatar_user'] !== 'user-def.svg')) {
                unlink('user/profile/img/'.$foto['avatar_user']);
                return true;
            }else{
                return true;
            }
    }
    // update quotes
    protected function _uQuotes($q)
    {
        if (isset($q) && $q != null) {
            $this->db->prepare('UPDATE data_siswa SET quotes = :quote WHERE(nis = :nis)');
            $this->db->bind('quote',$q);
            $this->db->bind('nis',$_SESSION['login']);
            $this->db->execute();
                if ($this->db->rowCount() > 0) {
                    return true;
                }else{
                    return false;
                }
        }else{
            return false;
        }
    }
    // update username
    protected function _uUser($user)
    {
        if (isset($user) && $user != null) {
            $this->db->prepare('UPDATE akun_siswa SET username = :user WHERE(nis = :nis)');
            $this->db->bind('user',$user);
            $this->db->bind('nis',$_SESSION['login']);
            $this->db->execute();
                if ($this->db->rowCount() > 0) {
                    return true;
                }else{
                    return false;
                }
        }else{
            return false;
        }
    }
    // update email
    protected function _uEmail($email)
    {
        if (isset($email) && $email != null) {
            $this->db->prepare('UPDATE akun_siswa SET email = :email WHERE(nis = :nis)');
            $this->db->bind('email',$email);
            $this->db->bind('nis',$_SESSION['login']);
            $this->db->execute();
                if ($this->db->rowCount() > 0) {
                    return true;
                }else{
                    return false;
                }
        }else{
            return false;
        }
    }
}
