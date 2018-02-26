<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 25.02.2018
 * Time: 21:25
 */

namespace Core\Command;


abstract class Command
{
    abstract function execute(CommandContext $context);
}