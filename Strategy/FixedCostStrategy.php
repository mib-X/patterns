<?php


namespace Strategy;


class FixedCostStrategy extends CostStrategy
{

    public function cost(Lesson $lesson): int
    {
        // TODO: Implement cost() method.
        return 30;
    }

    public function chargeType(): string
    {
        // TODO: Implement chargeType() method.
        return "Фиксированная оплата";
    }
}