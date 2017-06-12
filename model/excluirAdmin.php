<?php  
session_start();
require "../banco/conecta.php";

$id = $_GET['id'];

$sql = "DELETE FROM admin WHERE id=$id";
$retorno = mysqli_query($conecta, $sql);
if($retorno){
	header("Location: ../dash.php");
	$_SESSION['success'] = "Administrador excluido com sucesso!";
}
else{
	header("Location: ../dash.php");
	$_SESSION['danger'] = "Erro ao exluir!";
}

?>