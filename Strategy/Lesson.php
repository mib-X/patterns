<?php


namespace Strategy;


abstract class Lesson
{
    private $costStrategy;
    protected $duration;

    public function __construct($duration, CostStrategy $costStrategy)
    {
        $this->costStrategy = $costStrategy;
        $this->duration = $duration;
    }
    public function cost() : int
    {
        return $this->costStrategy->cost($this);
    }
    public function chargeType() : string
    {
        return $this->costStrategy->chargeType();
    }
    public function getDuration()
    {
        return $this->duration;
    }
}