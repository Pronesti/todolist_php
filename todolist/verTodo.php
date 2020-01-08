<?php
session_start();
$todo = $_SESSION['list'][$_GET['id']];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$todo['title']?></title>
</head>
<body>
    <h1> Todo List </h1>
    <h3><?=$todo['title']?></h1>
    <p><?=$todo['message']?></p>
    <a href="index.php">Volver</a>
</body>
</html>