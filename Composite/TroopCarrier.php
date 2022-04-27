<?php


namespace Composite;


class TroopCarrier extends CompositeUnit
{
    public function addUnit(Unit $unit)
    {
        if($unit instanceof Cavalry){
            throw new \Exception('Нельзя перемещать лошадь на бронетранспортере.');
        }
        parent::addUnit($unit);
    }

    function bombardStrength()
    {
        return 0;
    }
}