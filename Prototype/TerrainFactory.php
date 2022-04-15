<?php


namespace Prototype;


class TerrainFactory
{
    private Sea $sea;
    private Plains $plains;
    private Forest $forest;

    public function __construct(Sea $sea, Plains $plains, Forest $forest)
    {
        $this->forest = $forest;
        $this->sea = $sea;
        $this->plains = $plains;
    }

    /**
     * @return Sea
     */
    public function getSea(): Sea
    {
        return clone $this->sea;
    }

    /**
     * @return Plains
     */
    public function getPlains(): Plains
    {
        return clone $this->plains;
    }

    /**
     * @return Forest
     */
    public function getForest(): Forest
    {
        return clone $this->forest;
    }
}