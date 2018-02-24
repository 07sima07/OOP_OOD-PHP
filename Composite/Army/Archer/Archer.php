<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 24.02.2018
 * Time: 11:30
 */

namespace Core\Composite\Army\Archer;

use Core\Composite\Unit;

class Archer extends Unit
{
    function bombardStrength()
    {
        return 4;
    }
}