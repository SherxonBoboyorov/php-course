<?php 

spl_autoload_register(function ($class_name) {
    include 'crs/' . $class_name . '.php';
})

?>