<?php

require_once 'SuperPowerDecorator.php';

class NightVision extends SuperPowerDecorator
{
    protected $human;

    public function __construct(Human $human)
    {
        $this->human = $human;
    }

    public function getSuperPower(): string
    {
        return $this->human->getSuperPower() . ", seeing in the dark";
    }
}
