<?php

require_once 'Beverage.php';
require_once 'CondimentDecorator.php';

class Whip extends CondimentDecorator
{
    protected $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", Whip";
    }

    public function cost(): float
    {
        return $this->beverage->cost() + .10;
    }
}
