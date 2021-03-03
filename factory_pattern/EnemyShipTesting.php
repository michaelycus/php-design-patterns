<?php

require_once 'EnemyShip.php';
require_once 'UFOEnemyShip.php';
require_once 'RocketEnemyShip.php';
require_once 'BigUFOEnemyShip.php';
require_once 'EnemyShipFactory.php';

$shipFactory = new EnemyShipFactory();

$theEnemy = null;

$typeOfShip = "B";

$theEnemy = $shipFactory->makeEnemyShip($typeOfShip);

doStuffEnemy($theEnemy);

// IN THE OLD WAY...

// $ufoEnemy    = new UFOEnemyShip();
// $rocketEnemy = new RocketEnemyShip();

// doStuffEnemy($ufoEnemy);
// doStuffEnemy($rocketEnemy);

function doStuffEnemy(EnemyShip $anEnemyShip)
{
    $anEnemyShip->displayEnemyShip();
    $anEnemyShip->followHeroShip();
    $anEnemyShip->enemyShipShoots();
}
