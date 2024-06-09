<?php


require_once 'config|bootstrap.php';

$posts = Post::getAll();

$delta = Post::orderBydeck('created_at')->paginate(12);

$products = ['Element 1', 'Element 2'];

$chunkProducts = array_chunk($products, 2);

return $products;

?>



