<?php 

class Car {
    public $name;
    protected $model;
    private $year;

    public function getModel() {
        return $this->model;
    }

    public function setModel($value) {
         $this->model = $value;
    }

    public function getYear(){
        return $this->year;
    }


    public function setYear($value){
         $this->year = $value;
    }
}

?>