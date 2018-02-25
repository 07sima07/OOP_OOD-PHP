<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 25.02.2018
 * Time: 13:26
 */

namespace Core\Strategy\Marker;


class RegexMarker extends Marker
{
    function mark($response)
    {
        return (preg_match($this->test, $response));
    }
}