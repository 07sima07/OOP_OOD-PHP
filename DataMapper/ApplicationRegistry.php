<?php
/**
 * Created by PhpStorm.
 * User: 07sim
 * Date: 03.03.2018
 * Time: 1:38
 */

namespace Core\DataMapper;


class ApplicationRegistry
{
    private static $DSN = 'mysql:dbname=app';
    private static $user = 'root';
    private static $pass = 'vfrcbv';

    public static function getDSN(): string
    {
        return self::$DSN;
    }


    public static function getUser(): string
    {
        return self::$user;
    }


    public static function getPass(): string
    {
        return self::$pass;
    }


}