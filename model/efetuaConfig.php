<?php
session_start();
require "../banco/conecta.php";


if(!empty($_POST['nome']) && !empty($_POST['url'])){
	$url = addslashes($_POST['url']);
	$nome = addslashes($_POST['nome']);
	$facebook = addslashes($_POST['facebook']);
	$twitter = addslashes($_POST['twitter']);
	$linkedin = addslashes($_POST['LinkedIn']);
	$sobre = addslashes($_POST['sobre']);
	$nomeDaEmpresa = addslashes($_POST['nome-empresa']);

	$sql = "UPDATE config SET nome='{$nome}', base_url='{$url}', nomeDaEmpresa ='{$nomeDaEmpresa}', sobre='{$sobre}', twitter='{$twitter}', facebook='{$facebook}', linkedin='{$linkedin}'";
	$retorno = mysqli_query($conecta, $sql);
	if($retorno){
		if($_GET['editar'] == "true"){
			header("Location: ../dash.php");
			$_SESSION['success'] = "Editado com sucesso!";
		}else{
			header("Location: ../cadastro.php?add=false");
			$_SESSION['success'] = "Configurado com sucesso!";
		}
		
	}
	}else{
		header("Location: ../welcome.php");
		$_SESSION['danger'] = "Erro ao configurar";
	}