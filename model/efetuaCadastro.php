<?php  
session_start();
require "../banco/conecta.php";


if(($_POST['senha'] == $_POST['confirma-senha']) && !empty($_POST['nome']) && !empty($_POST['email'])){
	$email = addslashes($_POST['email']);
	$nome = addslashes($_POST['nome']);
	$senha = addslashes(md5($_POST['senha']));

	$sql = "INSERT INTO admin (nome, email, senha) VALUES ('{$nome}','{$email}','$senha')";
	$retorno = mysqli_query($conecta, $sql);
	if($retorno){
		
		if($_GET['add'] == 1){
			header("Location: ../dash.php");
			$_SESSION['success'] = "Administrador Cadastrado com sucesso!";
		}else{
			header("Location: ../admin.php");
			$_SESSION['success'] = "Administrador Cadastrado com sucesso!";
		}
		
	}
}else{
	header("Location: ../cadastro.php");
	$_SESSION['danger'] = "Erro ao cadastrar";
}




?>