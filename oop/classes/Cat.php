<?php 

class Cat {
    public $name;

    public function __toString()
    {
        return $this->name;
    }

    public function __clone()
    {
        echo 'hozir obyektdan clone olinyapti . <br>';
    }
}


?>