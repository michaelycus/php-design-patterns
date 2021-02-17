<?php
require_once 'FlyBehavior.php';

class FlyWithWings implements FlyBehavior
{
    public function fly(): void
    {
        echo "I'm flying!\n";
    }
}
