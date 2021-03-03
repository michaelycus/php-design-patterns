<?php

class RocketEnemyShip extends EnemyShip
{
    public function __construct()
    {
        $this->setName("Rocket Enemy Ship");
        $this->setDamage(10.0);
    }
}
