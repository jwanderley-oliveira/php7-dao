<?php 

require_once("config.php");

$root = new usuario();

$root->loadById(3);

echo $root;


/*
$sql = new sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

 ?>