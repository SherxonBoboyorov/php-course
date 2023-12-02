<?php 

// Abstract Classes

abstract class Car {
    public $model;
    protected $year;
    private $km;

    public function __construct($model, $year, $km)
    {
        $this->model = $model;
        $this->year = $year;
        $this->km = $km;
    }

    public function drive() 
    {
        return 'driving';
    }

    protected function reverse()
    {
      return 'reverse drive in the car';
    }

    private function sell()
    {
      return 'selling';
    }
}

class ElectricCar extends Car {
}

$lucid = new ElectricCar('lucid', 2022, 10);

var_dump($lucid);


















?>