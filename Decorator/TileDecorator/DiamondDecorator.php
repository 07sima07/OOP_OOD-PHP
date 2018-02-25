<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 24.02.2018
 * Time: 20:16
 */

namespace Core\Decorator\TileDecorator;


class DiamondDecorator extends TileDecorator
{
    function getWealthFactor()
    {
        return $this->tile->getWealthFactor()+2;
    }

}