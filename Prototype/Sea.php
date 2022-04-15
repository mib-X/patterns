<?php


namespace Prototype;


class Sea
{
    private $navigability = 0;

    public function __construct(int $navigability = 0)
    {
        $this->navigability = $navigability;
    }
}