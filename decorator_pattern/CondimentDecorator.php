<?php

require_once 'Beverage.php';

abstract class CondimentDecorator extends Beverage
{
    abstract public function getDescription(): string;
}
