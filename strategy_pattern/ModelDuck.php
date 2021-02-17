<?php

class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior   = new FlyNoWay();
        $this->quackBehavior = new Quacker();
    }

    public function display(): void
    {
        echo "I'm a model duck.";
    }
}
