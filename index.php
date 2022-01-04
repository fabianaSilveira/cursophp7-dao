<?php

require_once("config.php");

$root = new Usuario();

$root->loadbyId(3);

//retorna o __toString() do Usuario
echo $root;

?>