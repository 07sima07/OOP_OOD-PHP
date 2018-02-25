<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 25.02.2018
 * Time: 12:06
 */

namespace Core\Interpreter;


class InterpreterContext
{
    private $expressionStore = array();

    function replace(Expression $exp, $value)
    {
        $this->expressionStore[$exp->getKey()] = $value;
    }

    function lookup(Expression $exp)
    {
        return $this->expressionStore[$exp->getKey()];
    }
}