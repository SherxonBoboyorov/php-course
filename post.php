<?php

require_once  'config/bootstrap.php';


$post_id = $_GET['id'];

$post = Post::getById($post_id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post <?= $post_id ?> </title>
</head>
<body>

    <div>
        <h1><?= $post->id . ' - ' . $post->title ?></h1>
        <p><?= $post->body ?></p>
        <small><?= $post->created_at ?></small>
        <small><?= $post->updated_at ?></small>
        <div><?= $post->title ?></div>
    </div>

    <div>Hello world</div>



</body>
</html>