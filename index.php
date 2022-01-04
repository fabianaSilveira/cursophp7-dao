<?php

require_once("config.php");

$root = new Usuario();

//carrega um usuario
$id=3;
$root->loadbyId($id);

//retorna o __toString() do Usuario
echo "retorna o usuario com id $id <br>";
echo $root;


echo "<br>";

//carrega uma lista de usuarios
echo "<br>retorna a lista de usuarios<br>";
$list = Usuario::getList();
echo json_encode($list);



echo "<br>";

//carrega uma lista de usuarios by login
echo "<br>retorna a lista de usuarios by login <br>";
$busca = Usuario::search("jo");
echo json_encode($busca);


echo "<br>";

//carrega um usuario by login e senha
echo "<br>retorna um usuario by login e senha <br>";
$usuario = new Usuario();
$usuario->login("root", "!@$%#");

echo $usuario;


?>