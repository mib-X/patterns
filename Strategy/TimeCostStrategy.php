<?php


namespace Strategy;


class TimeCostStrategy extends CostStrategy
{

    public function cost(Lesson $lesson): int
    {
        // TODO: Implement cost() method.
        return $lesson->getDuration() * 5;
    }

    public function chargeType(): string
    {
        // TODO: Implement chargeType() method.
        return "Почасовая оплата";
    }
}