<?php  
session_start();
require "../banco/conecta.php";

$id = $_GET['id'];

$sql = "DELETE FROM mensagem WHERE id=$id";
$retorno = mysqli_query($conecta, $sql);
if($retorno){
	header("Location: ../mensagens.php");
	$_SESSION['success'] = "Mensagem excluida com sucesso!";
}
else{
	header("Location: ../mensagens.php");
	$_SESSION['danger'] = "Erro ao exluir!";
}

?>