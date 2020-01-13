<?php
session_start();
require_once("TemplateEngine.php");
include_once("listarProductos.php");

if(!isset($_SESSION['usuarios'])){
    $_SESSION['usuarios'] = array();
    }
if(!$_SESSION['isLogged']){
    header("Location: loginForm.php");
}
if(isset($_GET['item'])){
    $_SESSION['carrito'][] = $_GET['item'];
}

$te = new TemplateEngine("index.template");
$nav = new TemplateEngine("navbar.template");
$nav->addVariable("username", $_SESSION['username']);
$te->addVariable("navbar", $nav->render());
$te->addVariable("contenido", $lista);
echo $te->render();
?>