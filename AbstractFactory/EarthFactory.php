<?php


namespace AbstractFactory;


class EarthFactory extends TerrainFactory
{

    function getSea(): Sea
    {
        // TODO: Implement getSea() method.
        return new EarthSea();
    }

    function getPlains(): Plains
    {
        // TODO: Implement getPlains() method.
        return new EarthPlains();
    }

    function getForest(): Forest
    {
        // TODO: Implement getForest() method.
        return new EarthForest();
    }
}