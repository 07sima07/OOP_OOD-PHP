<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 27.02.18
 * Time: 12:22
 */

namespace Core\Registry;


abstract class Registry
{
    protected abstract function set($key, $value);
    protected abstract function get($key);
}