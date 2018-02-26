<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 26.02.2018
 * Time: 16:13
 */

namespace Core\Command;


class CommandContext
{
    private $params = array();
    private $error = "";

    function __construct()
    {
        $this->params = $_REQUEST;
    }

    function addParam($key, $value)
    {
        $this->params[$key] = $value;
    }

    function getParam($key)
    {
        return $this->params[$key];
    }

    function setError($error)
    {
        $this->error = $error;
    }

    function getError()
    {
        return $this->error;
    }
}