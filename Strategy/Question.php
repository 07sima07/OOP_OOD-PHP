<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 25.02.2018
 * Time: 13:18
 */

namespace Core\Strategy;
use Core\Strategy\Marker\Marker;

abstract class Question
{
    private $prompt;
    private $marker;

    function __construct($prompt, Marker $marker)
    {
        $this->marker = $marker;
        $this->prompt = $prompt;
    }

    function mark($response)
    {
        return $this->marker->mark($response);
    }
}