<?php


namespace Visitor;


class TaxArmyVisitor extends ArmyVisitor
{
    private int $due = 0;
    private string $report = '';

    function visit(Unit $node)
    {
        $this->levy($node, 1);
    }
    public function visitArcher(Archer $node)
    {
        $this->levy($node, 2);
    }
    public function visitLaserCannon(LaserCannon $node)
    {
        $this->levy($node, 6);
    }

    private function levy(Unit $unit, int $amount)
    {
        $this->report .= "Налог для " . get_class($unit);
        $this->report .= " : $amount\n";
        $this->due += $amount;
    }

    /**
     * @return string
     */
    public function getReport(): string
    {
        return $this->report;
    }

    /**
     * @return int
     */
    public function getTax(): int
    {
        return $this->due;
    }
}