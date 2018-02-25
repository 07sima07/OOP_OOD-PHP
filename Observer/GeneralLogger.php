<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 25.02.2018
 * Time: 16:00
 */

namespace Core\Observer;


class GeneralLogger extends LoginObserver
{
    function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        //Registering join to journal
        print __CLASS__.":\tRegistering to system journal\n";
    }
}