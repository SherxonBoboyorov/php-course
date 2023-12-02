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


class ElectiricCar extends Car {

  public $km;

    public function getYear()
    {
      return $this->year;
    }

    public function getReverse()
    {
      return $this->reverse();
    }

    public function getKm()
    {
      return $this->km;
    }
}


$chevy = new Car('chevrolet', 2019, '180000');

$tesla = new ElectiricCar('tesla', 2022, 5000);
$tesla->km = 7777;

echo $tesla->getReverse();


?>