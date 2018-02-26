<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 26.02.2018
 * Time: 16:21
 */

namespace Core\Command;

class CommandFactory
{
    private static $dir = 'command';

    static function getCommand($action = 'Default')
    {
        if (preg_match('/\W/', $action)) {
           throw new \Exception("Invalid symbols to command");
        }
        $class = UCFirst(strtolower($action)) . "Command";
        $file = self::$dir . DIRECTORY_SEPARATOR . "{$class}.php";
        if (!file_exists($file)) {
            throw new CommandNotFoundException("File '$file' not found");
        }
        $class = 'Core\Command\\'.$class;
        if (!class_exists($class)) {
            throw new CommandNotFoundException("Class '$class' not found");
        }
        $cmd = new $class();
        return $cmd;
    }
}