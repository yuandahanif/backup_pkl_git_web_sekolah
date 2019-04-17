<?php
class App  
{
    private $controller = "landing",
            $method = "index",
            $params = [];

        public function __construct() {
            $url = $this->parseUrl();
            // controller | main class
            if (file_exists('setting/controllers/'.$url[0].'.php')) {
                $this->controller = $url[0];
                unset($url[0]);
            }
            require_once 'setting/controllers/'. $this->controller .'.php';
            $this->controller = new $this->controller;

            // methode | url ke-1
            if (isset($url[1])) {
                if (method_exists($this->controller,$url[1])) {
                    $this->method = $url[1];
                    unset($url[1]);
                }
            }
            if (!empty($url)) {
                $this->params = array_values($url);
            }
            call_user_func_array([$this->controller,$this->method],$this->params);
        }
    
    public function parseUrl()
    {
        if (isset($_GET["url"])) {
            $url = rtrim($_GET["url"],"/");
            $url = filter_var($url,FILTER_SANITIZE_URL);
            $url = explode("/",$url);
            return $url;
        }
    }
}
