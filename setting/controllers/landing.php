<?php
class landing extends Controller 
{
    public function index()
    {   $data['login'] = $this->model('cek_login')->cek_login();
        $data['title'] = 'SMK N TEMBARAK';
        $data['css'] = ['style-def','style'];
        $this->view('templates/header',$data);
        $this->view('landing/index',$data);
        $this->view('templates/footer');
    }
}
