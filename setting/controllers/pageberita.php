<?php
class pageberita extends Controller 
{
    public function index($id = 1)
    {
            
                $data['title'] = 'Berita | SMK N TEMBARAK';
                $data['css'] =['style-def','style-berita','style-page-berita','style-event-popup','style-editprofile'];

                $data['login'] = $this->model('cek_login')->cek_login();
                $this->view('templates/header',$data);

                $data['berita'] = $this->model('ambil_berita')->beritaBy($id);
                $this->view('page_berita/index',$data);
                $data['event'] = $this->model('profile_kanan')->getEvent();
                if ($data['login'] === 0){
                    $data['profile'] = ['nama' => 'Guest',
                                        'avatar_user' => 'user-def.svg',
                                        'quotes' => 'please login first',
                                        'tombol_profile' => 'off',
                                        'role' => 'Guest'];
                    $this->view('templates/profile-kanan',$data);
                }else{
                    $data['script'] = ['script-popup-profile'];
                    $data['profile'] = $this->model('profile_kanan')->getProfile(); 
                    $data['profile']['tombol_profile'] = '';
                    $this->view('templates/profile-kanan',$data);
                    $data['user'] = $this->model('edit_user')->getUser();
                    $data['url_asal'] = 'pageberita';
                    $this->view('templates/popup-edit-profile',$data);
                }
                $this->view('templates/modal-popup');
                $this->view('templates/footer',$data);
    }
}
