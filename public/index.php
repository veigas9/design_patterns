<?php

use Core\Creational\Builder\Conceitual\PhoneBuilder;
use Core\Creational\Builder\Conceitual\SamsungPhone;


require_once __DIR__ . '/../vendor/autoload.php';

$galaxyS20 = new PhoneBuilder(
    phone: new SamsungPhone(),
    data: [
        'cpu' => 'Exynos 990',
        'gpu' => 'Mali-G77 MP11',
        'ram' => 8,
        'model' => 'Galaxy S20',
    ]   
);

$galaxyS20->getPhone();



