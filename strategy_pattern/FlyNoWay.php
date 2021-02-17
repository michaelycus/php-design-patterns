<?php
require_once 'FlyBehavior.php';

class FlyNoWay implements FlyBehavior
{
    public function fly(): void
    {
        echo "I can't fly\n";
    }
}
