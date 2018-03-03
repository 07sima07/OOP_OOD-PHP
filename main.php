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
//    Core\Composite\Army\TroopCarrier,
//    \Core\Visitor\TextDumpArmyVisitor;
//
//
//try {
//    $army = new Army();
//    $army->addUnit(new Archer());
//    $army->addUnit(new Archer());
//    $army->addUnit(new Archer());
//
//    $textDump = new TextDumpArmyVisitor();
//    $army->accept($textDump);
//
//    print $textDump->getText();
//} catch (\Exception $e) {
//    print $e->getMessage();
//}

//use Core\Decorator\TileDecorator\DiamondDecorator,
//    Core\Decorator\TileDecorator\PullutionDecorator,
//    Core\Decorator\Plains;
//
//$plain = new Plains();
//$diamond = new DiamondDecorator($plain);
//$pullution = new PullutionDecorator( new DiamondDecorator($plain) );
//
//print $diamond->getWealthFactor()."\n";
//print $pullution->getWealthFactor();

//use Core\Interpreter\InterpreterContext,
//    Core\Interpreter\LiteralExpression,
//    Core\Interpreter\VariableExpression,
//    Core\Interpreter\OperatorExpression\BooleanOrExpression,
//    Core\Interpreter\OperatorExpression\EqualsExpression;
//
////$context = new InterpreterContext();
////$literal = new LiteralExpression('Four');
////$literal->interpret($context);
////print $context->lookup($literal)."\n";
////$var = new VariableExpression('input', 'four');
////$var->interpret($context);
////print $context->lookup($var)."\n";
////$newvar = new VariableExpression('input');
////$newvar->interpret($context);
////print $context->lookup($newvar)."\n";
////
////$var->setValue('Five');
////$var->interpret($context);
////print $context->lookup($var)."\n";
////print $context->lookup($newvar);
//
//$context = new InterpreterContext();
//$input = new VariableExpression('input');
//$statement = new BooleanOrExpression(
//    new EqualsExpression($input, new LiteralExpression('4') ),
//    new EqualsExpression($input, new LiteralExpression('Four') )
//);
//
//foreach (array('Four', '4', '52') as $val) {
//    $input->setValue($val);
//    print "$val:\n";
//    $statement->interpret($context);
//    if($context->lookup($statement)) {
//        print "matches \n\n";
//    } else {
//        print "not matches \n\n";
//    }
//}

//use Core\Strategy\Marker\RegexMarker,
//    Core\Strategy\Marker\MatchMarker,
//    Core\Strategy\Marker\MarkLogicMarker,
//    \Core\Strategy\TextQuestion;
//
//$markers = array(
//    new RegexMarker("/F.ve/"),
//    new MatchMarker("Five"),
//    new MarkLogicMarker('$input equals "Five"')
//);
//
//foreach ($markers as $marker) {
//    print get_class($marker). "\n";
//    $question = new TextQuestion("How match rays on Kremlin star", $marker);
//    foreach (array("Five", "Four") as $response) {
//        print "\t: $response: ";
//        if ($question->mark($response)) {
//            print "True! \n";
//        } else {
//            print "False! \n";
//        }
//    }
//}

//use Core\Observer\Login;
//
//$login = new Login();
//new \Core\Observer\SecurityMonitor($login);
//new \Core\Observer\GeneralLogger($login);
//new \Core\Observer\PartnershipTool($login);
//$login->notify();

//use Core\Command\Controller;
//
//$controller = new Controller();
//$context = $controller->getContext();
//$context->addParam('action', 'feedback');
//$context->addParam('username', 'bob');
//$context->addParam('pass', 'tiddles');
//$controller->process();

//$data = new \Core\DataMapper\VenueMapper();
//$pavel = new \Core\DataMapper\Venue();
//$pavel->setLogin('Pavel');
//$data->insert($pavel);
//
//$array = $data->find($pavel->getId());
//
//print_r($array);