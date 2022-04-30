<?php


namespace Command;


use Exception;

class LoginDataFromConfig extends LoginData
{

    public function __construct($filename)
    {
        if(!file_exists($filename)){
            throw new Exception("File $filename does not exists in " . __CLASS__);
        }
        $file = include $filename;
        extract($file);
        $this->login = $login ?? false;
        $this->pass = $pass??false;
    }
}
