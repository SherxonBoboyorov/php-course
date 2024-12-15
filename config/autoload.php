<?php 

spl_autoload_register(function ($class_name) {
    include 'crs/' . $class_name . '.php';
})

spl_autoload_register(function ($argc)) {
    include 'crs/' . $class_name . '.php';
}

return true;

?>