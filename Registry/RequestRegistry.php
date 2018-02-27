<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 27.02.18
 * Time: 12:23
 */

namespace Core\Registry;


use http\Env\Request;

class RequestRegistry extends Registry
{
    private static $instance;
    private $data = array();

    private function __construct() { }

    static function instance()
    {
        if (isset(self::$instance) ) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    protected function set($key, $value)
    {
        $this->data[$key] = $value;
    }

    protected function get($key)
    {
        if (isset($this->data[$key]) ) {
            return $this->data[$key];
        }
        return null;
    }

    static function getRequest()
    {
        return self::instance()->get('request');
    }

    static function setRequest(Request $request)
    {
        return self::instance()->set('request', $request);
    }

}