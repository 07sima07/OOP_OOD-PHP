<?php
/**
 * Created by PhpStorm.
 * User: 07sim
 * Date: 03.03.2018
 * Time: 1:40
 */

namespace Core\DataMapper;


class VenueMapper extends Mapper
{
    function __construct()
    {
        parent::__construct();
        $this->selectStmt = self::$PDO->prepare("SELECT * FROM user WHERE id=?");
        $this->updateStmt = self::$PDO->prepare("UPDATE user SET login=?, id=? WHERE id=?");
        $this->insertStmt = self::$PDO->prepare("INSERT INTO user (login) VALUES (?)");
        $this->deleteStmt = self::$PDO->prepare("DELETE FROM user WHERE id=?");
    }

    function getCollection(array $raw)
    {
        return new SpaceCollection($raw, $this);
    }

    function update(DomainObject $object)
    {
        print "Updating\n";
        $values = array($object->getLogin(), $object->getId(), $object->getId() );
        $this->updateStmt->execute($values);
    }

    protected function doCreateObject(array $array)
    {
        $obj = new Venue($array['id'] );
        $obj->setLogin($array['login'] );
        return $obj;
    }

    protected function doInsert(DomainObject $object)
    {
        print "Insert\n";
           debug_print_backtrace();

        $values = array($object->getLogin() );
        $this->insertStmt->execute($values);
        $id = self::$PDO->lastInsertId();
        $object->setId($id);
    }

    function selectStmt()
    {
        return $this->selectStmt;
    }

    function deleteStmt()
    {
        return $this->deleteStmt;
    }

}