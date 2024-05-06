<?php 

require_once 'config/bootstrap.php';

if($_SERVER['REQUEST_METHOD'] == 'POST' ){
    $title = $_POST['title'];
    $body = $_POST['body'];

   $result =  Post::create($title, $body);

   if($request == 1) {
        header("Location: index.php");
        exit;
   }else {
        return error;
        exit;
   }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>
<body>

    <form method="POst" action="">
        <h4>Create Post</h4>
        <div>
            <input type="text" name="title" placeholder="title">
        </div><br>
        <div>
            <textarea name="body" cols="30" rows="10" placeholder="body"></textarea>
        </div><br>
        <div>
            <button type="submit" class="buttons">Submit</button>
        </div>
    </form>
        
</body>
</html>