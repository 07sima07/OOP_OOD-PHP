<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 25.02.2018
 * Time: 12:36
 */

namespace Core\Interpreter\OperatorExpression;


use Core\Interpreter\InterpreterContext;

class EqualsExpression extends OperatorExpression
{
    protected function doInterpret(InterpreterContext $context, $result_l, $result_r)
    {
        $context->replace($this,  $result_l == $result_r);
    }
}