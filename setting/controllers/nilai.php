<?php
class nilai extends Controller 
{
    public function index()
    {
        $data['login'] = $this->model('cek_login')->cek_login();
        if ($data['login'] === 0){
            header('Location: '.BASEURL);
        }else{
            $data['title'] = 'Nilai | SMK N TEMBARAK';
            $data['css'] = ['style-def','style-berita','style-nilai','style-event-popup','style-editprofile'];
            $data['script'] = ['script-nilai','script-popup-profile'];

            $this->view('templates/header',$data);
            if (isset($_POST['nilai'])) {
                $data['nilai'] = $this->model('nilai_fn')->ambil_nilai($_POST['kelas'],$_POST['semester']);
                $this->view('nilai/index',$data);
            }else {
                $data['nilai'] = $this->model('nilai_fn')->ambil_nilai($_SESSION['kelas'],'1');
                $this->view('nilai/index',$data);
                $this->view('templates/popup-nilai',$data);
            }
            $data['profile'] = $this->model('profile_kanan')->getProfile();
            $data['profile']['tombol_profile'] = ''; 
            $data['event_kanan'] = $this->model('profile_kanan')->getEvent(); 
            $this->view('templates/profile-kanan',$data);
            $data['user'] = $this->model('edit_user')->getUser();
            $data['url_asal'] = 'nilai';
            $this->view('templates/popup-edit-profile',$data);
            $this->view('templates/modal-popup');
            $this->view('templates/popup-nilai');
            $this->view('templates/footer',$data);
        }
        
    }
}
