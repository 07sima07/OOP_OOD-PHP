<?php
/**
 * Created by PhpStorm.
 * User: 07sim
 * Date: 03.03.2018
 * Time: 1:01
 */

namespace Core\DataMapper;

abstract class Mapper
{
    protected static $PDO;

    function __construct()
    {
        if (!isset(self::$PDO) ) {
            $dsn = ApplicationRegistry::getDSN();
            $user = ApplicationRegistry::getUser();
            $pass = ApplicationRegistry::getPass();
            if (is_null($dsn) || is_null($user) || is_null($pass)) {
                throw new \Exception("DSN or user or pass not found");
            }
            self::$PDO = new \PDO($dsn, $user, $pass);
            self::$PDO->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }
    }

    function find($id)
    {
        $this->selectStmt()->execute(array($id) );
        $array = $this->selectStmt()->fetch();
        $this->selectStmt()->closeCursor();
        if (!is_array($array) ) { return null; }
        if (!isset($array['id'] ) ) { return null; }
        $object = $this->createObject($array);
        return $object;
    }

    function delete($id)
    {
        $this->deleteStmt()->execute(array($id) );
    }

    function createObject($array)
    {
        $obj = $this->doCreateObject($array);
        return $obj;
    }

    function insert(DomainObject $obj)
    {
        $this->doInsert($obj);
    }

    abstract function update(DomainObject $object);
    protected abstract function doCreateObject(array $array);
    protected abstract function doInsert(DomainObject $object);
    protected abstract function selectStmt();

}

