<?php


namespace Decorate;


class Plains extends Tile
{
    private $wealthFactor = 2;

    /**
     * @return mixed
     */
    function getWealthFactor()
    {
        return $this->wealthFactor;
    }
}