<?php
session_start();
$_SESSION['isLogged']=false;
$_SESSION['username']=null;
header("Location: index.php");
?>