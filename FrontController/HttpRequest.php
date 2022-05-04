<?php


namespace FrontController;


class HttpRequest extends Request
{

    public function init()
    {
        $this->props = $_REQUEST;
        $path = $_SERVER['REQUEST_URI'];
//        echo "<pre>";
//        var_dump($_SERVER);
        $this->path = (empty($path)) ? "/" : $path;
    }
}