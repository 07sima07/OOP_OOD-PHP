<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 25.02.2018
 * Time: 18:02
 */

namespace Core\Visitor;

use Core\Composite\Unit,
    Core\Composite\Army\TroopCarrier,
    Core\Composite\Army\Archer\Archer,
    Core\Composite\Army\Army;

abstract class ArmyVisitor
{
    abstract function visit(Unit $node);

    function visitArcher(Archer $node)
    {
        $this->visit($node);
    }

    function visitArmy(Army $node)
    {
        $this->visit($node);
    }

    function visitTroopCarrier(TroopCarrier $node)
    {
        $this->visit($node);
    }
}