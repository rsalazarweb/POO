<?php 

class Car
{
    protected $id;
    public $license;
    public $driver;
    public $passenger;

    public function getDataCar()
    {
        $car = "License: $this->license, Driver: $this->driver, Passenger: $this->passenger";
        return $car;
    }
}