<?php

require_once 'autoload.php';

$database = new Database('localhost', 'oop', 'root', null);
$pdo = $database->connect();
Post::$pdo = $pdo;

?>