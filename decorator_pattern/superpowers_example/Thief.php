<?php

require_once 'Human.php';

class Thief extends Human
{
    public function __construct()
    {
        $this->description = "I'm a thief! ";
    }

    public function getSuperPower(): string
    {
        return "I can borrow without asking";
    }
}
