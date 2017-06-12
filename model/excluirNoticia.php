<?php  
session_start();
require "../banco/conecta.php";

$id = $_GET['id'];

$sql = "DELETE FROM noticias WHERE id=$id";
$retorno = mysqli_query($conecta, $sql);
if($retorno){
	header("Location: ../posts.php");
	$_SESSION['success'] = "Noticia excluida com sucesso!";
}
else{
	header("Location: ../posts.php");
	$_SESSION['danger'] = "Erro ao exluir!";
}

?>