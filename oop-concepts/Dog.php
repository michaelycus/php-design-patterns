<?php

class Dog extends Animal
{

    public function __construct()
    {
        $this->setSound("Bark");
    }

    public function digHole(): void
    {
        echo "Dug a hole";
    }

}
