<?php
require_once 'FlyBehavior.php';

class FlyRocketPowered implements FlyBehavior
{
    public function fly(): void
    {
        echo "I'm flying with a rocket";
    }
}
