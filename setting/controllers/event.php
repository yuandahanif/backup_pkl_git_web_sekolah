<?php
class event extends Controller 
{
    public function index($awal = 1)
    {
        $data['title'] = 'Event | SMK N TEMBARAK';
                $data['css'] =['style-def','style-berita','style-event','style-event-popup','style-editprofile'];
                $data['login'] = $this->model('cek_login')->cek_login();
                $this->view('templates/header',$data);
        
                $data['curPage'] = $awal;
                $data['pagination'] = $this->model('profile_kanan')->pagination();
                $data['event'] = $this->model('profile_kanan')->list_event($awal);
                $data['event_kanan'] = $this->model('profile_kanan')->getEvent($awal);

                $this->view('event/index',$data);
                if ($data['login'] === 0){
                    $data['profile'] = ['nama' => 'Guest',
                                        'avatar_user' => 'user-def.svg',
                                        'quotes' => 'please login first',
                                        'tombol_profile' => 'off',
                                        'role' => 'Guest'];
                    $data['script'] = ['script-event'];
                    $this->view('templates/profile-kanan',$data);
                }else{
                    $data['script'] = ['script-popup-profile','script-event'];
                    $data['profile'] = $this->model('profile_kanan')->getProfile(); 
                    $data['profile']['tombol_profile'] = '';
                    $this->view('templates/profile-kanan',$data);
                    $data['user'] = $this->model('edit_user')->getUser();
                    $data['url_asal'] = 'event';
                    $this->view('templates/popup-edit-profile',$data);
                }
                $this->view('templates/modal-popup');
                $this->view('templates/footer',$data);
    }
}
