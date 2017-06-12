<?php
include ("mostra-alerta.php");


    unset($_SESSION['idAdmin']);
    header("location: admin.php");



$_SESSION['success'] = "Usuario deslogado com sucesso";

?>