<?php

// require 'classes/Dog.php';
// require 'classes/Cat.php';
// require 'classes/Friut.php';
// require 'Html/Table.php';
// require 'Kitchen/Table.php';

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

?>