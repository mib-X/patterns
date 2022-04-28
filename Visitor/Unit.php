<?php


namespace Visitor;


use ReflectionClass;
use ReflectionException;

abstract class Unit
{
    protected int $depth = 0;

    /**
     * @return int
     */
    public function getDepth(): int
    {
        return $this->depth;
    }

    /**
     * @param int $depth
     */
    protected function setDepth(int $depth): void
    {
        $this->depth = $depth;
    }
    public function accept(ArmyVisitor $visitor)
    {
        try {
            $refThis = new ReflectionClass(get_class($this));
        } catch (ReflectionException $e) {
        }
        $method = "visit" . $refThis->getShortName();
        $visitor->$method($this);
    }
}
