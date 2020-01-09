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
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
</head>
<body class="">

    <div class="card mx-auto" style="padding: 1rem;margin: 1rem;width:50vw;">
  <div class="card-body">
    <h5 class="card-title text-center"><?=$todo['title']?></h5>
    <p class="card-text"><?=$todo['message']?></p>
    <a href="index.php" class="btn btn-danger w-100">Volver</a>
  </div>
</div>
</body>
</html>