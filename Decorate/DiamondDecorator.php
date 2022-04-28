<?php


namespace Decorate;


class DiamondDecorator extends TileDecorator
{

    function getWealthFactor()
    {
        return $this->tile->getWealthFactor() + 2;
    }
}