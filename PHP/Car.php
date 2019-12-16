<?php 
require_once 'Account.php';

class Car
{
    private $id;
    public $license;
    public $driver;
    public $passenger;

    public function __construct($license, $driver){
        $this->license = $license;
        $this->driver = $driver;
    }


    public function getDataCar()
    {
        $car = "License: $this->license, Driver: ". $this->driver->name . ", Passenger: $this->passenger";
        return $car;
    }
}