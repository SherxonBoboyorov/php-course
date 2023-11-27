<?php

$car = "Malubi";

$foods = ["Manti", "osh", "Shurva", "Xonim"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Salom</h1> -->
    <p>Mening yoqtirgan mashinam bu - <?php echo $car ?></p>

    <h3>Taomlar:</h3>
    <ul>
        <?php foreach($foods as $food): ?>
              <li><?php echo $food ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>