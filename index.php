<?php 


require_once 'bootstrap.php';

$posts = Post::getAll();

var_dump($posts);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oop Blog</title>
</head>
<body>
    <h1>Opp Blog</h1>

    <ul>
        <?php foreach($posts as $post) : ?>
        <li>
            <h4><?= $post->id . ' - ' . $post->title ?></h4>
            <h4><?= $post->body ?></h4>
        </li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>