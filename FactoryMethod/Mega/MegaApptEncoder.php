<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 22.02.2018
 * Time: 17:42
 */

namespace Core\FactoryMethod\Mega;
use Core\FactoryMethod\ApptEncoder;

class MegaApptEncoder extends ApptEncoder
{
    function encode() : string
    {
        return 'Data for summit encoded to format MegaCal';
    }

}