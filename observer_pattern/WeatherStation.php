<?php

require_once 'WeatherData.php';
require_once 'CurrentConditionsDisplay.php';
require_once 'StatisticsDisplay.php';
require_once 'HeatIndexDisplay.php';

$weatherData = new WeatherData();

$currentDisplay = new CurrentConditionsDisplay($weatherData);

$statisticsDisplay = new StatisticsDisplay($weatherData);

$heatIndexDisplay = new HeatIndexDisplay($weatherData);

$weatherData->setMeasurements(80, 65, 30.4);
echo "\n";
$weatherData->setMeasurements(82, 70, 29.2);
echo "\n";
$weatherData->setMeasurements(78, 90, 29.2);
