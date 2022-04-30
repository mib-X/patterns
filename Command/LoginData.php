<?php


namespace Command;


abstract class LoginData
{
    protected $login;
    protected $pass;

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

}