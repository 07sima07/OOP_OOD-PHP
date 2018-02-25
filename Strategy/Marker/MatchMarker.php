<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 25.02.2018
 * Time: 13:26
 */

namespace Core\Strategy\Marker;


class MatchMarker extends Marker
{
    function mark($response)
    {
        return ($this->test == $response);
    }
}