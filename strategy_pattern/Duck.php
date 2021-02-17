<?php

require_once 'FlyBehavior.php';
require_once 'QuackBehavior.php';

abstract class Duck
{
    protected $flyBehavior;
    protected $quackBehavior;

    public function __construct()
    {
        $this->flyBehavior   = new FlyBehavior();
        $this->quackBehavior = new QuackBehavior();
    }

    abstract public function display(): void;

    public function performFly(): void
    {
        $this->flyBehavior->fly();
    }

    public function performQuack(): void
    {
        $this->quackBehavior->quack();
    }

    public function swim(): void
    {
        echo "All ducks float, even decoys!\n";
    }

    public function setFlyBehavior(FlyBehavior $fb)
    {
        $this->flyBehavior = $fb;
    }

    public function setQuackBehavior(QuackBehavior $qb)
    {
        $this->quackBehavior = $qb;
    }
}
