<?php 


require_once("config.php");
/*carrega 1 usuario
$root = new Usuario();
$root ->loadByID(15);
echo $root;
*/
/*

$lista = Usuario::getList();
echo json_encode($lista);
*/

/*Carrega uma lista de usuarios buscando pelo login

$search = Usuario::search("Fo");

echo json_encode($search);
*/
/*
$usuario = new Usuario();
$usuario->login("user","12345");

echo $usuario;*/
/*adiciona um user
$aluno = new Usuario("Sidnei","daledele");
$aluno->insert();
echo $aluno;
*/

$usuario = new Usuario();

$usuario->loadByID(17);
$usuario->update("lucas2131");

echo $usuario;





 ?>