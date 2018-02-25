<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 25.02.2018
 * Time: 12:02
 */

namespace Core\Interpreter;


abstract class Expression
{
    private static $keyCount = 0;
    private $key;

    abstract function interpret(InterpreterContext $context);

    function getKey()
    {
        if(!isset($this->key)) {
            self::$keyCount++;
            $this->key=self::$keyCount;
        }
        return $this->key;
    }
}