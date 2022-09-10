<?php
namespace application\core;
 
class View {
    public $path;
    public $route;
    public $layout = 'default';

    public function __construct($route) {
        $this->route = $route;
        $formActions = ['check', 'create', 'add'];
        if ( in_array($route['action'], $formActions)) {
            $this->path = $route['controller'].'/index';
        } else {
            $this->path = $route['controller'].'/'.$route['action'];
        }
    }

    public function render($title, $vars = []) {
        extract($vars);
        if (file_exists('application/views/'.$this->path.'.php')) {
            ob_start();
            require 'application/views/'.$this->path.'.php';
           // $content = ob_get_clean();
            require 'application/views/layouts/'.$this->layout.'.php';
        } else {
            br("File wasn't found ".$this->path);
        }
    }

    public static function errorCode($code) {
        http_response_code($code);
        $path = 'application/views/errors/'.$code.'.php';
        if (file_exists($path)) { require $path; }
        exit;
    }

    public function redirect($url) {
        header('location: '.$url);
        exit;
    }

}