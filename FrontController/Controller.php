<?php


namespace FrontController;


class Controller
{
    private $reg;
    private function __construct()
    {
        $this->reg = Registry::instance();
    }

    public static function run()
    {
        $instance = new self();
        $instance->init();
        $instance->handleRequest();
    }

    public function init()
    {
        $this->reg->getApplicationHelper()->init();
    }
    public function handleRequest()
    {
        $request = $this->reg->getRequest();
        $resolver = new CommandResolver();
        $cmd = $resolver->getCommand($request);
        $cmd->execute($request);
    }
}