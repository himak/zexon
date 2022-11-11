<?php
declare(strict_types=1);

namespace zexon;

require_once 'Vehicle.php';
require_once 'Truck.php';
require_once 'Motorcycle.php';

$truck = new Truck(
    settings: [
        'price' => 32000,
        'driver' => [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'age' => 21
        ]
    ]
);

$motorcycle = new Motorcycle(
    settings: [
        'price' => 12300,
    ]
);

var_dump($truck->getDriver());
var_dump($motorcycle);


