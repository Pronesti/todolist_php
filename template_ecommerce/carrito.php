<?php
session_start();
include_once("productos.php");
include_once("TemplateEngine.php");
$total=0;
$listaCarrito = "";
foreach ($_SESSION['carrito'] as $posicion => $itemKey) {
    foreach($productos as $key => $item){
        if($key == $itemKey){
            $prodCarrito=new TemplateEngine("elementoCarrito.template");
            $prodCarrito->addVariable("name", $item['name']);
            $prodCarrito->addVariable("key", $key);
            $prodCarrito->addVariable("posicion", $posicion);
            $prodCarrito->addVariable("price", $item['price']);
            $prodCarrito->addVariable("url", $item['url']);
            $listaCarrito .= $prodCarrito->render();
            $total += $item['price'];
        }
    }    
}


$te = new TemplateEngine("index.template");
$nav = new TemplateEngine("navbar.template");
$nav->addVariable("username", $_SESSION['username']);
$te->addVariable("navbar", $nav->render());
$carrito = new TemplateEngine("carrito.template");
$carrito->addVariable("listaCarrito", $listaCarrito);
$carrito->addVariable("total", $total);
if(count($_SESSION['carrito']) > 0){
  $te->addVariable("contenido", $carrito->render());
}else{
  $te->addVariable("contenido","<h1 class='text-center mt-5'> No hay elementos</h1>");
}
echo $te->render();