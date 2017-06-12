<?php  
session_start();
require "banco/conecta.php";

$email = addslashes($_POST['email']);
$senha = md5(addslashes($_POST['senha']));

$sql ="SELECT * FROM admin";
$retorno = mysqli_query($conecta, $sql);
$linha = mysqli_fetch_assoc($retorno);

if($linha){
    header("Location: templates/clean/index.php");
}else{
    header('Location: welcome.php');
   

}


?>