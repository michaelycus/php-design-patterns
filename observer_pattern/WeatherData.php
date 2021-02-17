<?php

require_once 'Subject.php';

class WeatherData implements Subject
{
    private $observers;
    private $temperature;
    private $humidity;
    private $pressure;

    public function __construct()
    {
        $this->observers = [];
    }

    public function registerObserver(Observer $o): void
    {
        $this->observers[] = $o;
    }

    public function removeObserver(Observer $o): void
    {
        $i = array_search($o, $this->observers);
        if ($i >= 0) {
            unset($this->observers[$i]);
        }
    }

    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function measurementsChanged()
    {
        $this->notifyObservers();
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity    = $humidity;
        $this->pressure    = $pressure;
        $this->measurementsChanged();
    }
}
