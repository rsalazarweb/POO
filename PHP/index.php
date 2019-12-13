<?php 

require_once 'Car.php';

$car = new Car();

$car->license = "MXN8965";
$car->driver = "Rodrigo Salazar";
$car->passenger = 4;

echo $car->getDataCar();