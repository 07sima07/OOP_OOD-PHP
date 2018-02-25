<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 25.02.2018
 * Time: 13:24
 */

namespace Core\Strategy\Marker;


class MarkLogicMarker extends Marker
{
    private $engine;

    function __construct($test)
    {
        parent::__construct($test);
        //$this->engine = new MarkParse($test);
    }

    function mark($response)
    {
        //return $this->engine->evalute($response);
        return true;
    }

}