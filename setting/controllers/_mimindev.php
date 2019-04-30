<?php
    class _mimindev extends Controller
    {
        protected function _cekAdmin()
        {
            if (isset($_SESSION['login']) || !isset($_SESSION['admin_login']) && $_SESSION['admin_login'] !== 'login') {
                header('Location: '.BASEURL.'landing');
            }else{
                // do fun stuff later
            }
        }


        public function index($uname = null ,$pass = null)
        {
            if (isset($_SESSION['admin_login'])) {
                header('Location: '.BASEURL.'_mimindev/dashboard');
            } else {
                if ($uname !== null && $pass !==null) {
                    $this->model('login_fn')->loginAdmin($uname,$pass);
                } else {
                    header('Location: '.BASEURL.'landing');
                    die();
                }
            }
        }

// anggep index ya
        // TODO:siswa
        // edit siswa
        public function dashboard($p = 1)
        {
                $this->_cekAdmin();
                $data['title'] = 'Siswa | Dishboard';
                $this->view('templates/admin/header-admin',$data);

                $this->view('templates/admin/nav-kiri-admin');
                $this->view('templates/admin/nav-atas-cari');
                $data['siswa']=$this->model('admin_fn')->listEdit($p,'data_siswa','nis');
                $this->view('admin/siswa/edit',$data);

                $this->view('templates/admin/footer-admin');
        }
        // hapus siswa
        public function hapusSiswa($p = 1)
        {
                $this->_cekAdmin();
                $data['title'] = 'Siswa | Dishboard';
                $this->view('templates/admin/header-admin',$data);

                $this->view('templates/admin/nav-kiri-admin');
                $this->view('templates/admin/nav-atas-cari');
                $data['siswa']=$this->model('admin_fn')->listEdit($p,'data_siswa','nis');
                $this->view('admin/siswa/hapus',$data);

                $this->view('templates/admin/footer-admin');
        }
        // tambah siswa
        public function tambahSiswa($nis = null)
        {
                $this->_cekAdmin();
                $data['title'] = 'Siswa | Dishboard';
                $data['css'] = ['admin-tambah|def-siswa'];
                $this->view('templates/admin/header-admin',$data);

                $this->view('templates/admin/nav-kiri-admin');
                $this->view('templates/admin/nav-atas');
                // route ubah || edit
                if ($nis === null) {
                    $this->view('admin/siswa/tambah');
                    if (isset($_POST['submit'])) {
                        $this->model('admin_fn')->tambahSiswa();
                    }
                } else {
                    $data['siswa'] = $this->model('admin_fn')->getAny('nis',$nis,'data_siswa');
                    // $data['siswa']['tanggal_lahir'] = $this->model('admin_fn')->dateHtml($data['siswa']['tanggal_lahir']);
                    $this->view('admin/siswa/tambah',$data);
                    if (isset($_POST['submit'])) {
                        $this->model('admin_fn')->updateSiswa($nis);
                    }
                }

                $this->view('templates/admin/footer-admin');
        }
        // TODO:event
        // edit siswa
        public function ubahEvent($p = 1)
        {
                $this->_cekAdmin();
                $data['title'] = 'Siswa | Dishboard';
                $data['css'] = ['admin-tambah|def-siswa'];
                $this->view('templates/admin/header-admin',$data);

                $this->view('templates/admin/nav-kiri-admin');
                $this->view('templates/admin/nav-atas-cari');

                $data['event'] = $this->model('admin_fn')->listEdit($p,'event','id_event');
                $this->view('admin/event/edit',$data);

                $this->view('templates/admin/footer-admin');
        }
        // hapus event
        public function hapusEvent($p = 1)
        {
                $this->_cekAdmin();
                $data['title'] = 'Siswa | Dishboard';
                $data['css'] = ['admin-tambah|def-siswa'];
                $this->view('templates/admin/header-admin',$data);

                $this->view('templates/admin/nav-kiri-admin');
                $this->view('templates/admin/nav-atas-cari');
                $data['event'] = $this->model('admin_fn')->listEdit($p,'event','id_event');
                $this->view('admin/event/hapus',$data);

                $this->view('templates/admin/footer-admin');
        }
        // tambah event
        public function tambahEvent($id = null)
        {
                $this->_cekAdmin();
                $data['title'] = 'Siswa | Dishboard';
                $data['css'] = ['admin-tambah|def-siswa'];
                $this->view('templates/admin/header-admin',$data);

                $this->view('templates/admin/nav-kiri-admin');
                $this->view('templates/admin/nav-atas');
                // route ubah || edit
                if ($id === null) {
                    $this->view('admin/event/tambah');
                    if (isset($_POST['submit'])) {
                        $this->model('admin_fn')->tambahEvent();
                    }
                } else {
                    $data['event'] = $this->model('admin_fn')->getAny('id_event',$id,'event');
                    // $data['siswa']['tanggal_lahir'] = $this->model('admin_fn')->dateHtml($data['siswa']['tanggal_lahir']);
                    $this->view('admin/event/tambah',$data);
                    if (isset($_POST['submit'])) {
                        // $this->model('admin_fn')->updateSiswa($nis);
                    }
                }
                

                $this->view('templates/admin/footer-admin');
        }
        // TODO:berita
        // hapus berita
        public function hapusBerita()
        {
                $this->_cekAdmin();
                $data['title'] = 'Siswa | Dishboard';
                $data['css'] = ['admin-tambah|def-siswa'];
                $this->view('templates/admin/header-admin',$data);

                $this->view('templates/admin/nav-kiri-admin');
                $this->view('templates/admin/nav-atas-cari');
                $this->view('admin/berita/hapus');

                $this->view('templates/admin/footer-admin');
        }
        // tambah berita
        public function tambahBerita()
        {
                $this->_cekAdmin();
                $data['title'] = 'Siswa | Dishboard';
                $data['css'] = ['admin-tambah|def-siswa'];
                $this->view('templates/admin/header-admin',$data);

                $this->view('templates/admin/nav-kiri-admin');
                $this->view('templates/admin/nav-atas');
                $this->view('admin/berita/tambah');

                $this->view('templates/admin/footer-admin');
        }



        // TODO: func
        public function hapus($t,$p,$i)
        {
            $this->model('admin_fn')->deleteAny($t,$p,$i);
        }
    }
    