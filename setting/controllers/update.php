<?php
    class update  extends Controller
    {
        public function editProfile($url)
    {
        $this->model('edit_user')->updateUser($url);
    }
    }
    
