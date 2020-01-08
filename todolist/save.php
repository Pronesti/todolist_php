<?php
session_start();
if(isset($_POST)){
    $_SESSION['list'][]= array("title"=>$_POST['title'], "message"=>$_POST['message'],"checked"=>false);
    Header('Location: index.php');
    Exit(); //optional
}else{
    Header('Location: saveTodo.html');
    Exit(); //optional
}
?>