<?php
class register extends Controller 
{
    public function index()
    {
        if ($this->model('cek_login')->cek_login() === 0){
            $data['title'] = 'Register | SMK N TEMBARAK';
            $this->view('templates/header-login',$data);
            $this->view('register/index',$data);
            $this->view('templates/footer');

            if (isset($_POST['register'])) {
                $regisValue=['nis'=>$_POST['nis'],
                            'username'=>$_POST['username'],
                            'email'=>$_POST['email'],
                            'password'=>$_POST['password'],
                            're-password'=>$_POST['re-password']
                            ];
                // cek apakah akun sudah ada di akun_siswa
                if($this->model('registrasi')->cekAdaAkun($regisValue['nis']) === 0){
                    // cek apakah nis ada di data_siswa
                    if ($this->model('registrasi')->cekAdaNis($regisValue['nis']) > 0) {
                        // cek apakah username memenuhi syarat && dan username belum digunakan
                        $username = $this->model('registrasi')->cekUsername($regisValue['username']);
                        if ($username === 'ok') {
                            // cek apakah email belum digunakan && memenuhi syarat
                            $email = $this->model('registrasi')->cekEmail($regisValue['email']);
                            if ($email === 'ok') {
                                // cek apakah password sama dan memenuhi syarat 
                                if ($regisValue['password'] === $regisValue['re-password'] && $this->model('registrasi')->cekPassword($regisValue['password'])  === 'ok') {
                                    $this->model('registrasi')->registrasi($regisValue);
                                }else {
                                    Flasher::setFlash('password harus huruf dan angka atau password tidak sama');
                                    header('Location: '.BASEURL.'register');
                                }
                            }else {
                                Flasher::setFlash($email);
                                header('Location: '.BASEURL.'register');
                            }
                        }else {
                            Flasher::setFlash($username);   
                            header('Location: '.BASEURL.'register');
                        }
                    }else {
                        Flasher::setFlash('siswa dengan nis '.$regisValue['nis'].' tidak ada');
                        header('Location: '.BASEURL.'register');
                    }
                }else {
                    Flasher::setFlash('siswa dengan nis '.$regisValue['nis'].' telah didaftarkan');
                    header('Location: '.BASEURL.'register');
                };
                
            }
        }else {
            header('Location: '.BASEURL.'berita');
        }
    }

    public function auth($nis,$token)
    {
        $this->model('registrasi')->auth($nis,$token);
    }
}