<?php

require_once("config.php");
//carrega um usuario
//$usuario = new Usuario();
//$usuario->loadById(10);
//echo $usuario;

//Carrega uma lista de usuarios 
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios pelo login
//$busca = Usuario::search("o");
//echo json_encode($busca);

//Carrega um usuário usando login e senha
//$usuario = new Usuario();
//$usuario->login("Victor", "1003030303");
//echo $usuario;

//Insert
//$aluno = new Usuario("aluno", "@aluno");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();

$usuario->loadById(11);

$usuario->update("trocou", "654321");

echo $usuario;


?>