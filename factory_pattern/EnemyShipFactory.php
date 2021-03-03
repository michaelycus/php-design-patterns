<?php

class EnemyShipFactory
{
    public function makeEnemyShip(string $newShipType)
    {
        if ($newShipType == "U") {
            return new UFOEnemyShip();
        } else if ($newShipType == "R") {
            return new RocketEnemyShip();
        } else if ($newShipType == "B") {
            return new BigUFOEnemyShip();
        } else {
            return null;
        }
    }
}
