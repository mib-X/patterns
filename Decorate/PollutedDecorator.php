<?php


namespace Decorate;


class PollutedDecorator extends TileDecorator
{

    function getWealthFactor()
    {
        return $this->tile->getWealthFactor() - 4;
    }
}