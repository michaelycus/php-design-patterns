<?php

require_once 'Beverage.php';
require_once 'CondimentDecorator.php';

class Soy extends CondimentDecorator
{
    protected $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", Soy";
    }

    public function cost(): float
    {
        return $this->beverage->cost() + .15;
    }
}
