<?php

require_once 'Beverage.php';

class DarkRoast extends Beverage
{
    public function __construct()
    {
        $this->description = "Dark Roast Coffee";
    }

    public function cost(): float
    {
        return 0.99;
    }
}
