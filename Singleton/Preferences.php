<?php


namespace Singleton;


class Preferences
{
    private array $props = [];
    private static $instance;

    private function __construct()
    {
    }
    public static function getInstance() : self
    {
        if (!isset(self::$instance)){
            self::$instance = new self();
            return self::$instance;
        }
        return self::$instance;
    }

    /**
     * @return mixed
     */
    public function setProp($key, $value)
    {
        $this->props[$key] = $value;
        return false;
    }

    public function getProp($key)
    {
        return $this->props[$key];
    }

}