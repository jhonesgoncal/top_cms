<?php
session_start();
include "../banco/conecta.php";
  $titulo = addslashes($_POST['titulo']);
  $subTitulo = addslashes($_POST['subTitulo']);
  $corpo = addslashes($_POST['editor']);
  $id = addslashes($_POST['id']);


  $sql = "UPDATE noticias SET titulo = '{$titulo}', subTitulo='{$subTitulo}', corpo='{$corpo}' WHERE id='{$id}'";

  $retorno = mysqli_query($conecta, $sql);

  if($retorno){
  	header("Location: ../edit.php?id=$id");
	$_SESSION['success'] = "Noticia adicionada com sucesso!";
  }else{
  	header("Location: ../edit.php?id=$id");
	$_SESSION['danger'] = "Erro ao editar noticia!";
  }


?>