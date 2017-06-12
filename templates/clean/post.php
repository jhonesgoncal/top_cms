<?php
require "../../config.php";
require '../../banco/conecta.php';
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
if(isset($_GET['id']) && !empty($_GET['id'])){
$id = $_GET['id'];
$sql = "SELECT * FROM noticias WHERE id={$id}";
$retorno = mysqli_query($conecta, $sql);
$noticia = mysqli_fetch_assoc($retorno);

?>

 <!-- menu e cabecalho -->
    <?php include("includes/cabecalho.php") ?>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/post-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1><?=$noticia['titulo']?></h1>
                        <h2 class="subheading"><?=$noticia['subTitulo']?></h2>
                        <span class="meta">Postado por <a href="#"><?=$noticia['nome']?></a> em <?= strftime(' %d de %B de %Y', strtotime($noticia['data']))?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <?=$noticia['corpo']?>
                </div>
            </div>
        </div>
    </article>

    <hr>

    <!-- Footer -->
   <?php include("includes/rodape.php") ?>
<?php
    }else{
        header("Location: index.php");
    }


?>