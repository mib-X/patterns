<?php


namespace FrontController;


class Conf
{
    private ?array $conf;

        public function __construct( ?array $conf = null)
        {
            $this->conf = $conf;
        }

    /**
     * @param $key
     * @return string|null
     */
    public function get($key) : ?string
    {
        if(isset($this->conf[$key])){
            return $this->conf[$key];
        }
        return null;
    }

}
