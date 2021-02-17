<?php
require_once 'Duck.php';
require_once 'Quacker.php';
require_once 'FlyWithWings.php';
require_once 'FlyNoWay.php';

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Quacker();
        $this->flyBehavior   = new FlyWithWings();
    }

    public function display(): void
    {
        echo "I'm a real Mallard duck\n";
    }
}
