<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 24.02.2018
 * Time: 20:11
 */

namespace Core\Decorator\TileDecorator;

use Core\Decorator\Tile;

abstract class TileDecorator extends Tile
{
    protected $tile;

    function __construct(Tile $tile)
    {
        $this->tile = $tile;
    }
}