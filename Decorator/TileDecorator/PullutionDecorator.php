<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 24.02.2018
 * Time: 20:17
 */

namespace Core\Decorator\TileDecorator;


class PullutionDecorator extends TileDecorator
{
    function getWealthFactor()
    {
        return $this->tile->getWealthFactor()-4;
    }

}