<?php
session_start();
include_once("TemplateEngine.php");
$te = new TemplateEngine("index.template");
$nav = new TemplateEngine("navbar.template");
$nav->addVariable("username", $_SESSION['username']);
$te->addVariable("navbar", $nav->render());
$te->addVariable("contenido", $lista);
$user = new TemplateEngine("user.template");
$user->addVariable("title", "Login");
$user->addVariable("extra", "<a href='registerForm.php' class='btn btn-warning float-right w-25'>Register</a>");
$te->addVariable("contenido",$user->render());
echo $te->render();
?>
