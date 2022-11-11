<?php

namespace zexon;

abstract class Vehicle
{
    private array $settings;

    /**
     * @param array $settings
     */
    public function __construct(array $settings = [ 'price' => null ])
    {
        $this->setSettings($settings);
    }

    /**
     * @param array $settings
     * @return Vehicle
     */
    protected function setSettings(array $settings): Vehicle
    {
        $this->settings = $settings;

        return $this;
    }

    /**
     * @return array
     */
    protected function getSettings(): array
    {
        return $this->settings;
    }

    /**
     * @param float $distance
     * @return float
     */
    protected function calculate(float $distance): float
    {
        return $this->settings['price'] * $distance;
    }
}
