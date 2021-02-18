<?php

require_once 'Espresso.php';
require_once 'DarkRoast.php';
require_once 'Mocha.php';
require_once 'Whip.php';
require_once 'HouseBlend.php';
require_once 'Soy.php';

$beverage = new Espresso();

echo $beverage->getDescription() . " $" . $beverage->cost() . "\n\n";

$beverage2 = new DarkRoast();
$beverage2 = new Mocha($beverage2);
$beverage2 = new Mocha($beverage2);
$beverage2 = new Whip($beverage2);

echo $beverage2->getDescription() . " $" . $beverage2->cost() . "\n\n";

$beverage3 = new HouseBlend();
$beverage3 = new Soy($beverage3);
$beverage3 = new Mocha($beverage3);
$beverage3 = new Whip($beverage3);

echo $beverage3->getDescription() . " $" . $beverage3->cost() . "\n\n";
