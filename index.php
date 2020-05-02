<?php 

require_once("config.php");

//Carrega um usuário
//$root = new usuario();
//$root->loadById(3);
//echo $root;

//$sql = new sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

// Carrega uma lista de usuários
//$lista = usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = usuario::search("jo");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
//$usuario = new usuario();
//$usuario->login("José","6789");
//echo $usuario;

//Criando um novo usuário
//$aluno = new usuario("aluno", "@lun0");
//$aluno->insert();
//echo $aluno;

//Modificando dados de usuário existente
$usuario = new usuario();
$usuario->loadById(8);
$usuario->update("professor", "teacher");

echo $usuario;


 ?>