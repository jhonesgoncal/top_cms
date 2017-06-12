<?php
require "../../../banco/conecta.php";
// Check for empty fields
   
$name = addslashes(($_POST['name']));
$email_address = addslashes(($_POST['email']));
$phone = addslashes(($_POST['phone']));
$message = addslashes(($_POST['message']));
$data = addslashes($_POST['date']);

$sql  = "INSERT INTO mensagem (nome, email, telefone, mensagem, data) VALUES ('{$name}','{$email_address}','{$phone}','{$message}', '{$data}')";
 $retorno = mysqli_query($conecta, $sql);
 if($retorno){
 	return true;  
 } else{
 	var_dump($retorno);
 	var_dump($sql);
 	return false;
 }

       
?>
