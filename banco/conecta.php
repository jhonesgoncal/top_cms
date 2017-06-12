<?php
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "cms_top";

	$conecta = mysqli_connect($host, $usuario, $senha) or print(mysqli_error());
	mysqli_select_db($conecta, $banco) or print(mysqli_error());
    mysqli_set_charset($conecta, "utf8");
