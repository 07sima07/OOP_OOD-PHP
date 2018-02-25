<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 24.02.2018
 * Time: 11:11
 */

namespace Core\Composite;

use Core\Visitor\ArmyVisitor;

abstract class Unit
{

    function getComposite()
    {
        return 0;
    }

    abstract function bombardStrength();

    function accept(ArmyVisitor $visitor)
    {
        $class = get_class($this);
        $className = end(explode('\\', $class));
        $method = "visit" . $className;
        $visitor->$method($this);
    }

    protected function setDepth($depth)
    {
        $this->depth = $depth;
    }

    function getDepth()
    {
        return $this->depth;
    }
}