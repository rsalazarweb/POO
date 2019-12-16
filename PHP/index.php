<?php 
require_once 'Car.php';
require_once 'UberX.php';
require_once 'account.php';

$account = new Account("Rodrigo Salazar", "INE1234");

$car = new Car("MXA3456", $account);

$uberX = new UberX("BNI1234", $account, "Mazda", "tres");

//echo $car->getDataCar();
$uberX->passenger = 4;
echo $uberX->getDataCar();