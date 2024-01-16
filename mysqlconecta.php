<?php
	error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
	$servidor = "servername";
	$dbname="dbname"; // Indique o nome do banco de dados
	$usuario="dbuser"; // Indique o nome do usuário
	$password="bdsenha"; // Indique a senha do usuário
	$id = mysqli_connect($servidor,$usuario,$password,$dbname);
	if($id){
		//conexão com sucesso.
	}else{
		//erro de conexão
	}
?>