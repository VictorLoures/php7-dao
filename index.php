<?php

require_once("config.php");

$usuario = new Usuario();

$usuario->loadById(10);

echo $usuario;


?>