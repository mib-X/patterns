<?php


namespace Command;


class CommandFactory
{
    private static $dir = "Command";

    public static function getCommand(string $action = 'Default') : Command
    {
        if(preg_match("/\W/", $action)){
            throw new CommandNotFoundExeption("Illegal characters in action");
        }
        $class = ucfirst($action) . 'Command';
        $file = self::$dir . DIRECTORY_SEPARATOR . $class . ".php";
        $fullClass = __NAMESPACE__ ."\\" . $class;

        if(!file_exists($file)){
            throw new CommandNotFoundExeption("No file $file in directory");
        }
        if(!class_exists($fullClass)){
            throw new CommandNotFoundExeption("Not exists class $class in file $file in directory");
        }
        $cmd = new $fullClass();
        return $cmd;
    }
}
