<?php

require_once 'Observer.php';
require_once 'DisplayElement.php';

class HeatIndexDisplay implements Observer, DisplayElement
{
    private $temperature;
    private $humidity;
    private $heatIndex;
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
        $this->heatIndex   = $this->computeHeatIndex($temperature, $humidity);
        $this->display();
    }

    public function display(): void
    {
        echo "HeatIndex: " . $this->heatIndex . "\n";
    }

    private function computeHeatIndex(float $t, float $rh)
    {
        $index = (float) ((16.923 + (0.185212 * $t) + (5.37941 * $rh) - (0.100254 * $t * $rh) +
            (0.00941695 * ($t * $t)) + (0.00728898 * ($rh * $rh)) +
            (0.000345372 * ($t * $t * $rh)) - (0.000814971 * ($t * $rh * $rh)) +
            (0.0000102102 * ($t * $t * $rh * $rh)) - (0.000038646 * ($t * $t * $t)) + (0.0000291583 *
                ($rh * $rh * $rh)) + (0.00000142721 * ($t * $t * $t * $rh)) +
            (0.000000197483 * ($t * $rh * $rh * $rh)) - (0.0000000218429 * ($t * $t * $t * $rh * $rh)) +
            0.000000000843296 * ($t * $t * $rh * $rh * $rh)) -
            (0.0000000000481975 * ($t * $t * $t * $rh * $rh * $rh)));
        return $index;
    }
}
