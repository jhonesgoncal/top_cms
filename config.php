<?php  
require "banco/conecta.php";

 define("BASE_URL","http://localhost/top_cms/");

 $sql_config = "SELECT * FROM config";
 $retorno_config = mysqli_query($conecta, $sql_config);
 $retorno_config = mysqli_fetch_assoc($retorno_config);


?>