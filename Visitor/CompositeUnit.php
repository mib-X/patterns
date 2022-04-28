<?php


namespace Visitor;


abstract class CompositeUnit extends Unit
{
    protected $units = array();

    function addUnit( Unit $unit ) {
        foreach ( $this->units as $thisunit ) {
            if ( $unit === $thisunit ) {
                return;
            }
        }
        $unit->setDepth($this->depth+1);
        $this->units[] = $unit;
    }

    function accept( ArmyVisitor $visitor ) {
        parent::accept( $visitor );
        foreach ( $this->units as $thisunit ) {
            $thisunit->accept( $visitor );
        }
    }
}