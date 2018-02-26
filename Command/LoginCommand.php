<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 26.02.2018
 * Time: 15:56
 */

namespace Core\Command;

class LoginCommand extends Command
{
    function execute(CommandContext $context)
    {
        $manager = Registry::getAccessManager();
        $user = $context->get('username');
        $pass = $context->get('pass');
        $user_obj = $manager->login($user, $pass);
        if (is_null($user_obj)) {
            $context->sendError($manager->getError());
            return false;
        }
        $context->addParam("user", $user_obj);
        return true;
    }
}