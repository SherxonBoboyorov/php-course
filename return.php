<?php


require_once 'config|bootstrap.php';

$posts = Post::getAll();

$delta = Post::orderBydeck('created_at')->paginate(12);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello</title>
</head>
<body>
    
</body>
</html>

