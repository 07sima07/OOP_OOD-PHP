<?php

require_once __DIR__."/vendor/autoload.php";

//use Core\Singleton\Singleton;
//
//$commsManager = Singleton::getInstance()->getCommsManager();
//print $commsManager->getAppEncoder()->encode()."\n";
//print $commsManager->getHeaderText()."\n";
//print $commsManager->getFooterText();

//use Core\Composite\Army\Army,
//    Core\Composite\Army\Archer\Archer,
//    Core\Composite\Army\TroopCarrier;
//
//
//try {
//    $army = new Army();
//    $army->addUnit(new Archer());
//    $army->addUnit(new Archer());
//    $army->addUnit(new Archer());
//    print count($army->getUnits()) ."\n";
//    $troop = new TroopCarrier();
//    $troop->addUnit($army);
//    print_r($troop->getUnits());
//    $army->addUnit($troop);
//    print_r($army->getUnits());
//} catch (\Exception $e) {
//    print $e->getMessage();
//}

