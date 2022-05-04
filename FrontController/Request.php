<?php


namespace FrontController;


abstract class Request
{
    protected array $props = [];
    protected array $feedback = [];
    protected string $path = '/';

    /**
     * Request constructor.
     */
    public function __construct()
    {
        $this->init();
    }

    abstract public function init();

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    public function setPath(string $path): void
    {
        $this->path = $path;
    }


    /**
     * @param string $key
     * @return mixed|null
     */
    public function getProp(string $key)
    {
        if(isset($this->props[$key])){
            return $this->props[$key];
        }
        return null;
    }

    /**
     * @param string $key
     * @param $value
     */
    public function setProp(string $key, $value) : void
    {
        $this->props[$key] = $value;
    }

    /**
     * @param string $msg
     */
    public function addFeedback(string $msg)
    {
        array_push($this->feedback, $msg);
    }

    /**
     * @return array|null
     */
    public function getFeedback(): ?array
    {
        return $this->feedback;
    }

    /**
     * @param string $separator
     * @return string
     */
    public function getStringFeedback($separator = "\n"): string
    {
        return implode($separator, $this->feedback);
    }

    /**
     *
     */
    public function clearFeedback()
    {
        $this->feedback = [];
    }
}
