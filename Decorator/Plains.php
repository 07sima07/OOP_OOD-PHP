<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 24.02.2018
 * Time: 20:10
 */

namespace Core\Decorator;


class Plains extends Tile
{
    private $wealthFactor = 2;
    function getWealthFactor()
    {
        return $this->wealthFactor;
    }
}