<?php 
require "../../banco/conecta.php";
?>
    <!-- menu e cabecalho -->
    <?php include("includes/cabecalho.php") ?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/about-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Sobre</h1>
                        <hr class="small">
                        <span class="subheading">Sobre o site.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?=$resultado['sobre']?>
            </div>
        </div>
    </div>

    <hr>

   <!-- Footer -->
   <?php include("includes/rodape.php") ?>