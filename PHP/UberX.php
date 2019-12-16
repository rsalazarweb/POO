<?php 
require_once 'Car.php';

class UberX extends Car{
    public $brand;
    public $model;

    public function __construct($license, $driver, $brand, $model)
    {
        parent::__construct($license, $driver);
        $this->brand = $brand;
        $this->model= $model;
    }

    public function getDataCar()
    {
        $car = "License: $this->license, Driver: ". $this->driver->name . ", Passenger: $this->passenger , Marca: $this->brand, Modelo: $this->model";
        return $car;
    }
}