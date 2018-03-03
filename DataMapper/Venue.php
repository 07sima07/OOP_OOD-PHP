<?php
/**
 * Created by PhpStorm.
 * User: 07sim
 * Date: 03.03.2018
 * Time: 17:51
 */

namespace Core\DataMapper;


class Venue extends DomainObject
{
    private $id;
    private $login;

    function __construct($id = null)
    {
        $this->id = $id;
    }

    function setLogin($login)
    {
        $this->login = $login;
    }
    function getLogin()
    {
        return $this->login;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
}