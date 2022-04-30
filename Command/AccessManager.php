<?php


namespace Command;


class AccessManager
{
    private string $login;
    private string $pass;
    private string $error;

    /**
     * @return string
     */
    public function getError() : string
    {
        return $this->error;
    }
    public function __construct(Logindata $logindata)
    {
        $this->login = $logindata->getLogin();
        $this->pass = $logindata->getPass();
    }

    public function login($login, $pass) : ?bool
    {
        if($this->login === $login && $this->pass == $pass){
            return true;
        }
        $this->error = "Username or password is wrong";
        return null;
    }
}