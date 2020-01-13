<?php
$page = $_GET['page'];

switch($page){
    case "loginForm":
        include_once("../src/loginForm.php");
        break;
    case "registerForm":
        include_once("../src/registerForm.php");
        break;
    case "carrito":
        include_once("../src/carrito.php");
        break;
    case "productos":
        include_once("../src/productos.php");
        break;
    case "listarProductos":
        include_once("../src/listarProductos.php");
        break;
    case "login":
        include_once("../src/login.php");
        break;
    case "logout":
        include_once("../src/logout.php");
        break;
    case "register":
        include_once("../src/register.php");
        break;
    case "eliminarDelCarrito":
        include_once("../src/eliminarDelCarrito.php");
        break;
    case "":
        include_once("../src/index.php");
        break;


}