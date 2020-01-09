<?php
session_start();
if(!isset($_SESSION['list'])){
    $_SESSION['list'] = array();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
</head>
<body>
<div class="card mx-auto" style="padding: 1rem;margin: 1rem;width:50vw;">
  <div class="card-body">
    <h5 class="card-title text-center">To Do List</h5>
   <ul class="list-group">
   <?php
   foreach($_SESSION['list'] as $key=>$todo){
       echo "<li class='list-group-item'><a href='verTodo.php?id=$key'>";
       if($todo['checked']){
           echo "<span class='text-decoration-none text-dark' style='text-decoration: line-through;'>";
       }else{
           echo "<span class='text-decoration-none text-dark' style='line-height:300%'>";
       }
       echo $todo['title'];
       echo "</span>";
       echo "</a> ";
       echo "<a class='btn btn-outline-success m-1 float-right' href='check.php?id=$key'>✓</a> ";
       echo "<a class='btn btn-outline-warning m-1 float-right' href='updateTodo.php?id=$key'>✎</a> ";
       echo "<a class='btn btn-outline-danger m-1 float-right' href='delete.php?id=$key'>☓</a></li> ";
   }
   ?>
   </ul> 
   <a class="btn btn-primary m-2 w-100" href='addTodo.php'>Agregar To Do</a>
   </div>
</div>
</body>
</html>