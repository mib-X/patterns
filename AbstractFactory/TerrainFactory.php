<?php


namespace AbstractFactory;


abstract class TerrainFactory
{
    abstract function getSea() : Sea;
    abstract function getPlains() : Plains;
    abstract function getForest() : Forest;
}