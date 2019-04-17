<?php
class profile_siswa extends Controller 
{
    public function index()
    {
            
                $data['title'] = 'Profile | SMK N TEMBARAK';
                $data['css'] =['style-def','style-berita','style-editprofile','style-event-popup','style-profile-siswa'];
                $data['login'] = $this->model('cek_login')->cek_login();
                $this->view('templates/header',$data);

                if ($data['login'] === 0){
                    header('Location: https://youtu.be/-tKVN2mAKRI',false);
                }else{
                    // isi
                    $data['siswa'] = $this->model('profile_siswa_fn')->getSiswa();
                    $this->view('profile/index_siswa',$data);
                    // kanan
                    $data['script'] = ['script-popup-profile'];
                    $data['profile'] = $this->model('profile_kanan')->getProfile(); 
                    $data['profile']['tombol_profile'] = '';
                    $data['event_kanan'] = $this->model('profile_kanan')->getEvent();
                    $this->view('templates/profile-kanan',$data);
                    // edit profile kanan
                    $data['user'] = $this->model('edit_user')->getUser();
                    $data['url_asal'] = 'berita';
                    $this->view('templates/popup-edit-profile',$data);
                }
                $this->view('templates/modal-popup');
                $this->view('templates/footer',$data);
    }
}
