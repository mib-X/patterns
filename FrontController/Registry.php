<?php


namespace FrontController;


use Exception;

class Registry
{
    private Request $request;
    private static ?Registry $instance = null;
    private ?ApplicationHelper $applicationHelper = null;
    private ?Conf $conf = null;
    private ?Conf $commands = null;

    private function __construct()
    {
    }

    /**
     * @return Registry
     */
    public static function instance(): Registry
    {
        if(!isset(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * @return Request
     * @throws Exception
     */
    public function getRequest() : Request
    {
        if(is_null($this->request)){
            throw new Exception ("Объект типа Request не задан!");
        }
        return $this->request;
    }

    /**
     * @param Request $request
     */
    public function setRequest(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @return ApplicationHelper
     */
    public function getApplicationHelper(): ApplicationHelper
    {
        if(is_null($this->applicationHelper)){
            $this->applicationHelper = new ApplicationHelper();
        }
        return $this->applicationHelper;
    }

    /**
     * @return Conf
     */
    public function getConf(): Conf
    {
        return $this->conf;
    }

    /**
     * @return Conf
     */
    public function getCommands(): Conf
    {
        return $this->commands;
    }

    /**
     * @param Conf $conf
     */
    public function setConf(Conf $conf): void
    {
        if(is_null($this->conf)){
            $this->conf = new Conf();
        }
        $this->conf = $conf;
    }

    /**
     * @param Conf $commands
     */
    public function setCommands(Conf $commands): void
    {
        $this->commands = $commands;
    }


}