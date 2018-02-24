<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 22.02.2018
 * Time: 20:21
 */

namespace Core\FactoryMethod\Mega;
use Core\FactoryMethod\ContEncoder;

class MegaContEncoder extends ContEncoder
{
    function encode()
    {
        return 'Data for summit encoded to MegaCont format';
    }
}