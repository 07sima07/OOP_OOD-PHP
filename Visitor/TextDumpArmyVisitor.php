<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 25.02.2018
 * Time: 18:06
 */

namespace Core\Visitor;


use Core\Composite\Unit;

class TextDumpArmyVisitor extends ArmyVisitor
{
    private $text = "";

    function visit(Unit $node)
    {
        $ret = "";
        $pad = 3 * $node->getDepth();
        $ret .= sprintf("%{$pad}s", "");
        $ret .= get_class($node).": ";
        $ret .= "Fire power: " . $node->bombardStrength() . "\n";
        $this->text .=$ret;
    }

    function getText()
    {
        return $this->text;
    }
}