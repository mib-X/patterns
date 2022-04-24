<?php


namespace AbstractFactory;


class MarsFactory extends TerrainFactory
{

    function getSea(): Sea
    {
        return new MarsSea();
    }

    function getPlains(): Plains
    {
        return new MarsPlains();
    }

    function getForest(): Forest
    {
        return new MarsForest();
    }
}