<?php

abstract class Human
{
    protected $description = "I'm a normal human";

    public function getDescription(): string
    {
        return $this->description;
    }

    abstract public function getSuperPower(): string;
}
