<?php
require_once "BloggsApptEncoder1.php";
require_once "AppointmentMaker2.php";

class ObjectAssembler
{
    public $components = [];

    public function __construct($config)
    {
        $this->configure($config);
    }
    private function configure($config) : void
    {
        $data = simplexml_load_file($config);
        foreach ($data->class as $class){
            $name = (string) $class['name'];
            $args = [];
            foreach ($class->arg as $arg){
                $num = (int) $arg['num'];
                $args[$num] = (string) $arg['inst'];
            }

            ksort($args);

            $this->components[$name] = function () use ($name, $args) {
                $expandedArgs = [];
                foreach ($args as $arg){
                    $expandedArgs[] = new $arg();
                }
                $rclass = new ReflectionClass($name);
                return $rclass->newInstanceArgs($expandedArgs);
            };
        }
    }
    public function getComponent(string $class)
    {
        if(!isset($this->components[$class])){
            throw new \Exception('No component with name ' . $class);
        }
        $ret = $this->components[$class]();
        return $ret;

    }
}
