<?php


namespace FrontController;


use Exception;

class ApplicationHelper
{
    private string $config = __DIR__ . "/configs/config.ini";
    private Registry $reg;

    public function __construct()
    {
        $this->reg = Registry::instance();
    }

    public function init()
    {
        $this->setupOptions();
        if($_SERVER['REQUEST_METHOD'])
        {
            $request = new HttpRequest();
        } else {
            $request = new CliRequest();
        }
        $this->reg->setRequest($request);
    }

    public function setupOptions()
    {
        if(!file_exists($this->config)){
            throw new Exception("Can't find config file in path $this->config");
        }
        $option = parse_ini_file($this->config, true);
        $conf = new Conf($option['config']);
        $this->reg->setConf($conf);
        $commands = new Conf($option['commands']);
        $this->reg->setCommands($commands);
    }
}