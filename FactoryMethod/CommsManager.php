<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 22.02.2018
 * Time: 17:38
 */

namespace Core\FactoryMethod;


abstract class CommsManager
{
    abstract function getHeaderText();
    abstract function getAppEncoder();
    abstract function getContEncoder();
    abstract function getFooterText();
}