<?php
session_start();
include ("../banco/conecta.php");

$email = addslashes($_POST['email']);
$senha = md5(addslashes($_POST['senha']));

$sql ="SELECT * FROM admin WHERE email = '{$email}' AND senha='{$senha}'";
$retorno = mysqli_query($conecta, $sql);
$linha = mysqli_fetch_assoc($retorno);

if($linha){
    header('Location: ../dash.php');
    $_SESSION['idAdmin'] = $linha['id'];
    $_SESSION['nome'] = $linha['nome'];
}else{
    header('Location: ../admin.php');
    $_SESSION['danger'] = "Usuario ou senha incorreta";

}