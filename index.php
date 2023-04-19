<?php 

	require_once("config.php");

	//Carrega um usuário
	//$root = new Usuario();
	//$root->loadById(3);
	//echo $root;

	/*$sql = new Sql();
	$usuarios = $sql->select("SELECT * FROM tb_usuarios");
	echo json_encode($usuarios); ESSE BLOCO CONSULTA TODOS OS USARIOS*/ 

	//Carrega uma lista de usuarios 

	//$lista = Usuario::getList(); //chama direto o método pq é estatico
	//echo json_encode($lista);

	//Carrega uma lista de usuários buscando pelo login
	//$search = Usuario::search("jo");
	//echo json_encode($search);

	//Carrega usuario usando login e senha
	$usuario = new Usuario();
	$usuario->login("root", "!@$%#");
	echo $usuario;

 ?>