<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 25.02.2018
 * Time: 15:46
 */

namespace Core\Observer;


class SecurityMonitor extends LoginObserver
{
    function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        if ($status[0] == Login::LOGIN_WRONG_PASS) {
            //send mail system admin
            print __CLASS__.":\t Sending mail system administrator\n";
        }
    }

}