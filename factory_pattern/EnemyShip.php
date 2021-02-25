<?php

abstract class EnemyShip
{
    private $name;
    private $damage;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getDamage(): float
    {
        return $this->damage;
    }

    public function setDamage($damage): void
    {
        $this->damage = $damage;
    }

    public function followHeroShip(): void
    {
        echo $this->getName() . " is following the hero" . "\n";
    }

    public function displayEnemyShip(): void
    {
        echo $this->getName() . " is on the screen" . "\n";
    }

    public function enemyShipShoots(): void
    {
        echo $this->getName() . " attacks and does " . $this->getDamage() . "\n";
    }
}
