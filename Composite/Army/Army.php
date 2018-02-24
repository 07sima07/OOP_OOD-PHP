<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 24.02.2018
 * Time: 11:13
 */

namespace Core\Composite\Army;

use Core\Composite\CompositeArmy;

class Army extends CompositeArmy
{
    private $units = array();

    function bombardStrength()
    {
        $ret = 0;
        foreach ($this->units as $unit) {
            $ret += $unit->bombardStrength();
        }
        return $ret;
    }
}