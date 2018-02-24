<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 22.02.2018
 * Time: 17:39
 */

namespace Core\FactoryMethod\Mega;

use Core\FactoryMethod\CommsManager,
    Core\FactoryMethod\ApptEncoder,
    Core\FactoryMethod\ContEncoder;

class MegaCommsManager extends CommsManager
{
    public function getHeaderText() : string
    {
        return 'MegaCal head col';
    }

    function getAppEncoder() : ApptEncoder
    {
        return new MegaApptEncoder();
    }
    function getContEncoder() : ContEncoder
    {
        return new MegaContEncoder();
    }

    function getFooterText() : string
    {
        return 'MegaCal footer col';
    }

}