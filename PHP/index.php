<?php 
require_once 'Account.php';
require_once 'Car.php';

$account = new Account("Rodrigo Salazar", "INE1234");

$car = new Car("MXA3456", $account);


echo $car->getDataCar();