<?php


namespace AbstractFactory;


class MarsFactory extends TerrainFactory
{

    function getSea(): Sea
    {
        // TODO: Implement getSea() method.
        return new MarsSea();
    }

    function getPlains(): Plains
    {
        // TODO: Implement getPlains() method.
        return new MarsPlains();
    }

    function getForest(): Forest
    {
        // TODO: Implement getForest() method.
        return new MarsForest();
    }
}