<?php
spl_autoload_register();

require_once "DI/ObjectAssembler.php";

use Decorate\DiamondDecorator;
use Decorate\Plains;
use Decorate\PollutedDecorator;
use Strategy\Seminar as Seminar;
use Strategy\Lecture as Lecture;
use Strategy\TimeCostStrategy as TimeCostStrategy;
use Strategy\FixedCostStrategy as FixedCostStrategy;
use Singleton\Preferences as Preferences;
use ServiceLocator\BloggsApptEncoder as BloggsApptEncoder;
use DI\AppointmentMaker2 as AppointmentMaker2;
use Strategy2\TextQuestion as TextQuestion;
use Strategy2\MatchMarker as MatchMarker;

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

//DI
$assembler = new ObjectAssembler("./DI/objects.xml");
$apptmaker = $assembler->getComponent("\DI\AppointmentMaker2");
$out = $apptmaker->makeAppointment();
print $out;


//Strategy2
$question = new TextQuestion('Сколько золотых мячей у Месси?', new MatchMarker('6'));
$question1 = new TextQuestion('Сколько золотых мячей у Месси?', new \Strategy2\RegexMarker('/S.x/i'));
$response = [5, 6, 'Sex', 'six'];
foreach ($response as $value){
    echo  'response:' . $value;
    if ($question1->mark($value) || $question->mark($value)) {
        echo " - Right; ";
    } else {
        echo " - Wrong; ";
    }
}

//Composite

$newArmy = new \Composite\Army();
$newArmy->addUnit(new \Composite\Archer());
$newArmy->addUnit(new \Composite\LaserCannon());
$newArmy->addUnit(new \Composite\Archer());
$subArmy = new \Composite\Army();
$subArmy->addUnit(new \Composite\LaserCannon());
$subArmy->addUnit(new \Composite\Archer());
echo $newArmy->bombardStrength();
echo $subArmy->bombardStrength();
$newArmy->addUnit($subArmy);
echo $newArmy->bombardStrength();
$newArmy->removeUnit($subArmy);
echo $newArmy->bombardStrength();
*/

//Decorator

$plains = new PollutedDecorator(new DiamondDecorator(new Plains()));
echo $plains->getWealthFactor();