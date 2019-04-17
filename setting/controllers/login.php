<?php
class login extends Controller 
{
    public function index()
    {
        if ($this->model('cek_login')->cek_login() === 0) {
            $data['title'] = 'Login | SMK N TEMBARAK';
            $this->view('templates/header-login',$data);
            $this->view('login/index',$data);
            $this->view('templates/footer');   
            if (isset($_POST['login'])) {
                $this->model('login_fn')->login($_POST['username'],$_POST['password']);
            }
        }else {
            header('Location: '.BASEURL.'berita');
        }
    }
}