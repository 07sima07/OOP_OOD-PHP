<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 25.02.2018
 * Time: 12:04
 */

namespace Core\Interpreter;


class LiteralExpression extends Expression
{
    private $value;

    function __construct($value)
    {
        $this->value = $value;
    }

    function interpret(InterpreterContext $context)
    {
        $context->replace($this, $this->value);
    }
}