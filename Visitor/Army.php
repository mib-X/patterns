<?php


namespace Visitor;


class Army extends CompositeUnit
{

    function bombardStrength() : float
    {
        $str = 0;
        foreach ($this->units as $unit){
            $str += $unit->bombardStrength();
        }
        return $str;
    }
}
