<?php
session_start();
include "../banco/conecta.php";
  $titulo = addslashes($_POST['titulo']);
  $subTitulo = addslashes($_POST['subTitulo']);
  $corpo = addslashes($_POST['editor']);
  $data = addslashes($_POST['data']);
  $nome = addslashes($_POST['nome']);
  

  $sql = "INSERT INTO noticias(titulo, corpo, subTitulo, data, nome) VALUES('{$titulo}', '{$corpo}', '{$subTitulo}','{$data}', '{$nome}')";

  $retorno = mysqli_query($conecta, $sql);
  if($retorno){
  	header("Location: ../dash.php");
	$_SESSION['success'] = "Noticia adicionada com sucesso!";
  }else{
  	header("Location: ../dash.php");
	$_SESSION['danger'] = "Erro ao adicionar noticia!";
  }

 

?>
