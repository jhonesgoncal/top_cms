<?php
require 'banco/conecta.php';

$sql = "SELECT * FROM pagina";

$paginas = mysqli_query($conecta, $sql);

foreach ($paginas as $pagina) {
    echo $pagina['titulo'].'<br>';
    echo $pagina['corpo'].'<br>';
}

?>
