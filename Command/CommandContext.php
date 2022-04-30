<?php


namespace Command;


class CommandContext
{
    private array $params = [];

    /**
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }
    private string $error = "";

    public function __construct()
    {
        $this->params = $_REQUEST;
    }
    public function addParam(string $key, $value)
    {
        $this->params[$key] = $value;
    }

    /**
     * @param $key
     * @return ?string
     */
    public function get($key): ?string
    {
        if(isset($this->params[$key])){
            return $this->params[$key];
        }
        return null;
    }


    /**
     * @return string
     */
    public function getError(): string
    {
        return $this->error;
    }

    /**
     * @param string $error
     */
    public function setError(string $error): void
    {
        $this->error = $error;
    }
}