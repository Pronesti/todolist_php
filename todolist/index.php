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
</head>
<body>
   <h1>Todo List</h1>
   <ul>
   <?php
   foreach($_SESSION['list'] as $key=>$todo){
       echo "<li><a href='verTodo.php?id=$key'>";
       if($todo['checked']){
           echo "<span style='text-decoration: line-through;'>";
       }else{
           echo "<span>";
       }
       echo $todo['title'];
       echo "</span>";
       echo "</a> ";
       echo "<a href='check.php?id=$key'>✓</a> ";
       echo "<a href='updateTodo.php?id=$key'>✎</a> ";
       echo "<a href='delete.php?id=$key'>☓</a></li> ";
   }
   ?>
   </ul> 
   <a href='addTodo.php'>Agregar To Do</a>
</body>
</html>