<?php
$db = new mysqli('localhost', 'root', '', 'acceptic');

require_once "Twig/Autoloader.php";
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('includes');

$twig = new Twig_Environment($loader);
