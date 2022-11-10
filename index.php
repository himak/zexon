<?php

class Truck {

    private $settings;

    public function __construct( $settings ) {
        $this->setSettings( $settings );
    }

    protected function setSettings(array $settings) {
        $this->settings = $settings;

        return $this;
    }

    protected function driver() {
        return $this->settings['driver'];
    }

    protected function calculate($distance) {
        return $this->settings['price'] * $distance;
    }

}

class Motorcycle {

    private $settings;

    public function __construct( $settings ) {
        $this->setSettings( $settings );
    }

    protected function calculate($distance) {
        return $this->settings['price'] * $distance;
    }

    protected function payment(): void {
        //...
    }

    protected function setSettings(array $settings) {
        $this->settings = $settings;

        return $this;
    }

}
