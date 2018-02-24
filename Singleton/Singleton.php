<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 22.02.2018
 * Time: 15:37
 */

namespace Core\Singleton;


use Core\FactoryMethod\Bloggs\BloggsCommsManager,
    Core\FactoryMethod\Mega\MegaCommsManager,
    Core\Setting;

class Singleton
{
    private $commsManager;
    private static $instance;

    private function __construct() {
        $this->init();
    }

    private function init()
    {
        switch(Setting::$COMMSTYPE) {
            case 'Bloggs':
                $this->commsManager = new BloggsCommsManager();
                break;
            default:
                $this->commsManager = new MegaCommsManager();
        }
    }
    public static function getInstance()
    {
        if (empty(self::$instance)) {
           self::$instance = new self();
        }
        return self::$instance;
    }
    function getCommsManager()
    {
        return $this->commsManager;
    }

}