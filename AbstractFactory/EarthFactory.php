<?php


namespace AbstractFactory;


class EarthFactory extends TerrainFactory
{
    function getSea(): Sea
    {
        return new EarthSea();
    }

    function getPlains(): Plains
    {
        return new EarthPlains();
    }

    function getForest(): Forest
    {
        return new EarthForest();
    }
}