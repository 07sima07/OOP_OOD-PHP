<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 26.02.2018
 * Time: 17:11
 */

namespace Core\Command;


class FeedbackCommand extends Command
{
    function execute(CommandContext $context)
    {
        $msgSystem = Registry::getMessageSystem();
        $email = $context->get('email');
        $msg = $context->get('msg');
        $topic = $context->get('topoc');
        $result = $msgSystem->send($email, $msg, $topic);
        if (!$result) {
            $context->setError($msgSystem->getError() );
            return false;
        }
        return false;
    }

}