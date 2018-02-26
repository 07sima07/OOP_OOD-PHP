<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 26.02.2018
 * Time: 16:32
 */

namespace Core\Command;


class Controller
{
    private $context;

    function __construct()
    {
        $this->context = new CommandContext();
    }

    function getContext()
    {
        return $this->context;
    }

    function process()
    {
        $cmd = CommandFactory::getCommand( $this->context->getParam('action') );
        if (!$cmd->execute($this->context) ) {
            //processing error
        } else {
            //All good
            //View result
        }
    }
}