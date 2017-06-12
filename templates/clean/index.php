<?php 
require "../../banco/conecta.php";
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

$sql = "SELECT * FROM noticias ORDER BY data DESC LIMIT 10";
$retorno = mysqli_query($conecta, $sql);

?>
    <!-- menu e cabecalho -->
    <?php include("includes/cabecalho.php") ?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1><?=$resultado['nome']?></h1>
                        <hr class="small">
                        <span class="subheading">Um site de noticias inovador</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php foreach ($retorno as $noticia) : ?>
                <div class="post-preview">
                    <a href="post.php?id=<?=$noticia['id']?>">
                        <h2 class="post-title">
                            <?= $noticia['titulo']?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?= $noticia['subTitulo']?>
                        </h3>
                    </a>
                   <p class="post-meta">Postado por <a href="#"><?=$noticia['nome']?></a> em <?= strftime(' %d de %B de %Y', strtotime($noticia['data']))?></p>
                </div>
                <hr>
            <?php endforeach ?>    
                
                <hr>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="noticias.php">Todas Noticias &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
   <?php include("includes/rodape.php") ?>