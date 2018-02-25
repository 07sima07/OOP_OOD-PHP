<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 25.02.2018
 * Time: 12:19
 */

namespace Core\Interpreter;


class VariableExpression extends Expression
{
    private $val;
    private $name;

    function __construct($name, $val=null)
    {
        $this->name = $name;
        $this->val = $val;
    }

    function interpret(InterpreterContext $context)
    {
        if(!is_null($this->val)) {
            $context->replace($this, $this->val);
            $this->val = null;
        }
    }

    function setValue($value)
    {
        $this->val = $value;
    }

    function getKey()
    {
        return $this->name;
    }
}