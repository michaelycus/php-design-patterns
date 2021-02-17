<?php

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    private $temperature;
    private $humidity;
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
        $this->display();
    }

    public function display(): void
    {
        echo "Current conditions: " . $this->temperature . "F degrees and " . $this->humidity . "% humidity";
    }

}
