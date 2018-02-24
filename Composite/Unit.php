<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 24.02.2018
 * Time: 11:11
 */

namespace Core\Composite;


abstract class Unit
{
    function getComposite()
    {
        return 0;
    }
    abstract function bombardStrength();
}