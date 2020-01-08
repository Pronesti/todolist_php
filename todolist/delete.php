<?php
session_start();
$id = $_GET['id'];
unset($_SESSION['list'][$id]);
Header('Location: index.php');
Exit(); //optional
?>