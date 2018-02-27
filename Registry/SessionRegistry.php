<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 27.02.18
 * Time: 12:33
 */

namespace Core\Registry;


class SessionRegistry extends Registry
{
    private static $instance;

    private function __construct()
    {
        session_start();
    }

    function instance()
    {
        if (isset(self::$instance) ) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    protected function set($key, $value)
    {
        $_SESSION[__CLASS__][$key] = $value;
    }

    protected function get($key)
    {
        if (isset($_SESSION[__CLASS__][$key]) ) {
            return $_SESSION[__CLASS__][$key];
        }
        return null;
    }

    static function setComplex(Complex $complex)
    {
        self::instance()->set('complex', $complex);
    }

    function getComplex()
    {
        return self::instance()->get('complex');
    }
}