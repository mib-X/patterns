<?php


namespace Command;


class Registry
{
    public static function getAccessManager()
    {
        return new AccessManager(new LoginDataFromConfig('Command/db.php'));
    }
    public static function getMessageSystem()
    {
        return new MessageSystem();
    }
}