<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 25.02.2018
 * Time: 13:22
 */

namespace Core\Strategy\Marker;


abstract class Marker
{
    protected $test;

    function __construct($test)
    {
        $this->test = $test;
    }

    abstract function mark($response);
}