<?php 


require_once("config.php");

$root = new Usuario();
$root ->loadByID(7);

echo $root;



 ?>