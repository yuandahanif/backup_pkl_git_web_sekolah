<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class registrasi
{
    private $db,$mail;
    public function __construct() {
        $this->db = new Database();
    }
    private function random_str()
    {
        $key = 'abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $token = '';
            for ($i=0; $i < 25; $i++) { 
                $token .=$key[ rand(0, strlen($key)-1 ) ];
            }
            return $token;
    }
    // cek apakah akun sudah ada di akun_siswa
    public function cekAdaAkun($nis)
    {
        $this->db->prepare('SELECT * FROM akun_siswa WHERE nis = :nis');
        $this->db->bind('nis',$nis);
        $this->db->execute();
        return $this->db->rowCount();
    }
    // cek apakah nis ada di data_siswa
    public function cekAdaNis($nis)
    {
        $this->db->prepare('SELECT * FROM data_siswa WHERE nis = :nis');
        $this->db->bind('nis',$nis);
        $this->db->execute();
        return $this->db->rowCount();
    }
    // cek apakah username memenuhi syarat && dan username belum digunakan
    public function cekUsername($username)
    {   
        $regex_username = '/(?!.*[\-\_]{2,})^[a-zA-Z0-9\-\_]{3,24}$/';
        if ($username != null && preg_match($regex_username,$username)) {
            $this->db->prepare('SELECT * FROM akun_siswa WHERE username = :username');
            $this->db->bind('username',$username);
            $this->db->execute();
            if($this->db->rowCount() === 0){
                return 'ok';
            }
        }else{
            return 'username hanya boleh huruf angka dan - _  atau sudah digunakan';
        }
    }
    // cek apakah email belum digunakan && memenuhi syarat
    public function cekEmail($email)
    {   
        $regex_email = '/^([A-Z|a-z|0-9](\.|_){0,1})+[A-Z|a-z|0-9]\@([A-Z|a-z|0-9])+((\.){0,1}[A-Z|a-z|0-9]){2}\.[a-z]{2,3}$/';
        if ($email != null && preg_match($regex_email,$email)) {
            $this->db->prepare('SELECT * FROM akun_siswa WHERE email = :email');
            $this->db->bind('email',$email);
            $this->db->execute();
            if($this->db->rowCount() === 0){
                return 'ok';
            }
        }else{
            return 'email tidak valid! atau sudah terdaftar';
        }
    }
    // cek apakah password sama dan memenuhi syarat
    public function cekPassword($password)
    {   
        $regex_password = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{5,})/';
        if (preg_match($regex_password,$password)) {
            return 'ok';
        }else{
            return 'salah lol';
        }
    }
    // time to regist
    public function registrasi($data)
    {
        $token = $this->random_str();
        $this->db->prepare("INSERT INTO akun_siswa VALUES ('',:username,:password,:email,:nis,:token,'unverified','user-circle-solid.svg','')");
        $this->db->bind('username',$data['username']);
        $this->db->bind('password',$data['password']);
        $this->db->bind('email',$data['email']);
        $this->db->bind('nis',$data['nis']);
        $this->db->bind('token',$token);
        $this->db->execute();

        // if success
        if($this->db->rowCount() > 0){
            $mail = new PHPMailer(true);                         // Passing `true` enables exceptions
            //Server settings
            // $mail->SMTPDebug = 4;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';                         // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = EMAIL;                             // SMTP username
            $mail->Password = EMAIL_PASS;                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to
            //Recipients
            $mail->setFrom(EMAIL, 'skanibarsch.epizy.com');
            $mail->addAddress($data['email'],$data['username']);     // Add a recipient
            $mail->addAddress($data['email']);               // Name is optional
            $mail->addReplyTo($data['email'],'Please Don\'t reply this email');
            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Verification for '.$data['username'];
            $mail->Body    = 'To active your account please visit this <a href="'.BASEURL.'register/auth/'.$data['nis'].'/'.$token.'">LINK</a>';
            $mail->AltBody = 'sorry html user only';
            // bypass ssl localhost
            $mail->smtpConnect(
                array(
                    "ssl" => array(
                        "verify_peer" => false,
                        "verify_peer_name" => false,
                        "allow_self_signed" => true
                    )
                )
            ); 
            $mail->send();

            Flasher::setFlash('silahkan verifikasi email anda');
            header('Location: '.BASEURL.'login');
        }else {
            Flasher::setFlash('registrasi gagal silahkan di ulang!');
            header('Location: '.BASEURL.'register');
        }
    }
    // auth kuyy
    public function auth($nis,$token)
    {
        $this->db->prepare('SELECT auth_token FROM akun_siswa WHERE nis = :nis');
        $this->db->bind('nis',$nis);
        $auth_token = implode('',$this->db->queryOne());
            if ($auth_token === $token) {
                $this->db->prepare('UPDATE akun_siswa SET status = :status WHERE auth_token = :auth');
                $this->db->bind('auth',$token);
                $this->db->bind('status','verified');
                $this->db->execute();
                if($this->db->rowCount() >= 0){
                    Flasher::setFlash('Email anda telah diverifikasi silahkan login!');
                    header('Location: '.BASEURL.'login');
                }else{
                    Flasher::setFlash('Gagal memverifikasi email bag 1');
                    header('Location: '.BASEURL.'login');
                }
            } else {
                Flasher::setFlash('Gagal memverifikasi email');
                header('Location: '.BASEURL.'login');
            }
    }
}
