<?php

require_once("config.php");

$root = new Usuario();

//carrega um usuario
$id=3;
$root->loadbyId($id);

//retorna o __toString() do Usuario
echo " == retorna o usuario com id $id  == <br>";
echo $root;


echo "<br>";

//carrega uma lista de usuarios
echo "<br> == retorna a lista de usuarios == <br>";
$list = Usuario::getList();
echo json_encode($list);



echo "<br>";

//carrega uma lista de usuarios by login
$search = "oo";
echo "<br> == retorna a pesquisa de usuarios by search($search) == <br>";
$busca = Usuario::search($search);
echo json_encode($busca);


echo "<br>";

//carrega um usuario by login e senha
echo "<br> == retorna um usuario by login e senha == <br>";
$usuario = new Usuario();
$usuario->login("root", "!@$%#");

echo $usuario;


echo "<br>";

//insert novo  usuario
echo "<br> == insert novo  usuario ==  <br>";
$name="Crisitna";
$aluno = new Usuario($name, "@456");
$aluno->insert();

if (empty($aluno->getIdusuario())){
    echo "O usuario $name já incluido";
}else{
    echo $aluno;
}

echo "<br>";

//updade  usuario
echo "<br> == update usuario == ";
$name="Fabiana.Cristina";
$usuario2 = new Usuario();
$usuario2->loadById(9);
$usuario2->update("Fabiana.Crisitna", "2345");
echo $usuario2;


echo "<br>";

//delete  usuario
echo "<br> == delete usuario == ";
$usuario2 = new Usuario();
$id = 8;
$usuario2->loadById($id);

if (empty($usuario2->getIdusuario())){
    echo "<br> O usuario $id não encontrado";
}else{
    $usuario2->delete();
    echo "<br> O usuario $id excluido";

}

?>