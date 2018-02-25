<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 25.02.2018
 * Time: 16:03
 */

namespace Core\Observer;


class PartnershipTool extends LoginObserver
{
    function doUpdate(Login $login)
    {
        $status  = $login->getStatus();
        //Check ip address
        //Send cookie file if address matches to list
        print __CLASS__.":\tSending cookie-file if address matches to list\n";
    }
}