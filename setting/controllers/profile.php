<?php
class profile extends Controller 
{
    public function index()
    {   $data['login'] = $this->model('cek_login')->cek_login();
        $data['title'] = 'profile | SMK N TEMBARAK';
        $data['css'] = ['style-def','style-profile'];
        $this->view('templates/header',$data);
        $this->view('profile/index');
        $this->view('templates/footer');
    }
}