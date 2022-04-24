<?php
spl_autoload_register();

define('ROOT', $_SERVER['DOCUMENT_ROOT']);
require_once "DI/ObjectAssembler.php";

use Strategy\Seminar as Seminar;
use Strategy\Lecture as Lecture;
use Strategy\TimeCostStrategy as TimeCostStrategy;
use Strategy\FixedCostStrategy as FixedCostStrategy;
use Singleton\Preferences as Preferences;
use ServiceLocator\BloggsApptEncoder as BloggsApptEncoder;
use DI\AppointmentMaker2 as AppointmentMaker2;

/*
//Strategy
$lessons[] = new Seminar(4, new TimeCostStrategy());
$lessons[] = new Lecture(4, new FixedCostStrategy());
foreach ($lessons as $lesson) {
    print "Оплата за занятие {$lesson->cost()}. ";
    print "Тип оплаты: {$lesson->chargeType()}\п";
}
//Singleton
$pref = Preferences::getInstance();
$pref->setProp('name', 'mib');
unset($pref);
$pref1 = Preferences::getInstance();
print_r($pref1->getProp('name')) . PHP_EOL;
//Factory method
$mgr = new ServiceLocator\MegaCommsManager();
echo $mgr->getHeaderText();
echo $mgr->getApptEncoder()->encode();
echo $mgr->getFooterText();
//Abstract Factory
$planet = new AbstractFactory\EarthFactory();
print_r($planet->getSea()) ;
print_r($planet->getPlains());
print_r($planet->getForest()) ;
//Prototype
$planet1 = new Prototype\TerrainFactory(
    new Prototype\EarthSea(-1),
    new Prototype\MarsPlains(),
    new Prototype\EarthForest()
);
print_r($planet1->getSea() ) ;
print_r($planet1->getPlains());
print_r($planet1->getForest() ) ;
//Service Locator
$app = ServiceLocator\AppConfig::getInstance();
$manager = $app->getCommsManager();
echo $manager->getApptEncoder()->encode();
*/

$assembler = new ObjectAssembler("./DI/objects.xml");
$apptmaker = $assembler->getComponent("\DI\AppointmentMaker2");
$out = $apptmaker->makeAppointment();
print $out;
