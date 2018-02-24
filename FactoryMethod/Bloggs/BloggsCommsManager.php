<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 22.02.2018
 * Time: 17:39
 */

namespace Core\FactoryMethod\Bloggs;

use Core\FactoryMethod\CommsManager,
    Core\FactoryMethod\ApptEncoder,
    Core\FactoryMethod\ContEncoder;

class BloggsCommsManager extends CommsManager
{
    public function getHeaderText() : string
    {
        return 'BloggsCal head col';
    }

    function getAppEncoder() : ApptEncoder
    {
        return new BloggsApptEncoder();
    }
    function getContEncoder() : ContEncoder
    {
        return new BloggsContEncoder();
    }

    function getFooterText() : string
    {
        return 'BloggsCal footer col';
    }

}