<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 24.02.2018
 * Time: 13:05
 */

namespace Core\Composite\Army;
use Core\Composite\CompositeArmy;
use Core\Composite\Unit;

class TroopCarrier extends CompositeArmy
{
    function addUnit(Unit $unit)
    {
        if($unit instanceof Cavalry) {
            throw new \Exception('TroopCarrier do not transporting cavalry');
        }
        parent::addUnit($unit);
    }
    function removeUnit(Unit $unit)
    {
        parent::removeUnit($unit);
    }
}
