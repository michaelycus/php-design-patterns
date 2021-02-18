<?php

require_once 'Thief.php';
require_once 'NightVision.php';

$human = new Thief();
$human = new NightVision($human);

echo $human->getDescription() . "\n";
echo $human->getSuperPower();
