<?php


namespace ServiceLocator;


class AppConfig
{
    private static self $instance;
    private CommsManager $commsManager;

    public function __construct()
    {
        $this->init();
    }
    private function init(){
        switch (Settings::$COMMSTYPE){
            case ('Mega'):
                $this->commsManager = new MegaCommsManager();
                break;
            default:
                $this->commsManager = new BloggsCommsManager();
        }

    }
    public static function getInstance() : self
    {
        if(empty(self::$instance)){
            self::$instance = new self();
            return self::$instance;
        }
        return self::$instance;
    }
    public function getCommsManager() : CommsManager
    {
        return $this->commsManager;
    }
}