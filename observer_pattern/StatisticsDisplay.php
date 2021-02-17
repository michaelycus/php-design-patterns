<?php

require_once 'Observer.php';
require_once 'DisplayElement.php';

class StatisticsDisplay implements Observer, DisplayElement
{
    private $temperature;
    private $humidity;
    private $pressure;
    private $weatherData;

    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function update(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity    = $humidity;
        $this->pressure    = $pressure;
        $this->display();
    }

    public function display(): void
    {
        echo "Current conditions: " . $this->temperature . "F degrees and " . $this->humidity . "% humidity and " . $this->pressure . " p\n";
    }
}
