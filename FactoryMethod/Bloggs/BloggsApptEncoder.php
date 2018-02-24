<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 22.02.2018
 * Time: 17:42
 */

namespace Core\FactoryMethod\Bloggs;

use Core\FactoryMethod\ApptEncoder;

class BloggsApptEncoder extends ApptEncoder
{
    function encode() : string
    {
        return 'Data for summit encoded to format BloggsCal';
    }

}