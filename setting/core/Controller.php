<?php
class Controller
{
    public function view($view,$data = [])
    {
        require_once('views/'.$view.'.php');
    }
    public function model($model)
    {
        require_once('setting/models/'.$model.'.php');
        return new $model;
    }
}
