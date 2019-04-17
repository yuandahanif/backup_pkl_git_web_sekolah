<?php
class logout extends Controller 
{
    public function index()
    {
        $this->model('login_fn')->logout();
    }
}