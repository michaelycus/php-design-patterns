<?php

require_once 'MallardDuck.php';
require_once 'ModelDuck.php';
require_once 'FlyRocketPowered.php';
require_once 'FlyNoWay.php';

$mallard = new MallardDuck();
$mallard->performQuack();
$mallard->performFly();

$mallard->setFlyBehavior(new FlyNoWay());

$mallard->performFly();

$mallard->display();
$mallard->swim();

echo "-----\n";

$model = new ModelDuck();
$model->performFly();
$model->setFlyBehavior(new FlyRocketPowered());
$model->performFly();
