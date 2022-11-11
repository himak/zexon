<?php

namespace zexon;

class Truck extends Vehicle
{
    protected array $settings = [ 'driver' => null ];

    protected function driver(): mixed
    {
        return $this->settings['driver'];
    }

    public function getDriver(): mixed
    {
        return $this->driver();
    }
}
