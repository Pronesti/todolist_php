<?php
session_start();
$id = $_GET['id'];
$current = $_SESSION['list'][$id]['checked'];
$_SESSION['list'][$id]['checked'] = !$current;
Header('Location: index.php');
Exit(); //optional
?>