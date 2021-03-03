<?php

class Animal
{
    private $name;
    private $weight;
    private $sound;

    public function setName(string $newName): void
    {
        $this->name = $newName;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setWeight(int $newWeight): void
    {
        if ($newWeight > 0) {
            $this->weight = $newWeight;
        } else {
            echo "Weight must be bigger than 0";
        }

    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function setSound(string $newSound): void
    {
        $this->sound = $newSound;
    }

    public function getSound(): string
    {
        return $this->sound;
    }

}
