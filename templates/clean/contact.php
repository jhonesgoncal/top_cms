<?php 
require "../../banco/conecta.php";
?>
    <!-- menu e cabecalho -->
    <?php include("includes/cabecalho.php") ?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/contact-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Contato</h1>
                        <hr class="small">
                        <span class="subheading">Entre em contato conosco por aqui!</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Quer entrar em contato comigo? Preencha o formulário abaixo para me enviar uma mensagem e vou retornar para voce o mais rapido possivel!</p>
                <form name="sentMessage"  id="contactForm" novalidate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Nome</label>
                            <input type="text" class="form-control" placeholder="Nome" id="name" required data-validation-required-message="Por favor insira seu nome." name="name">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>E-mail</label>
                            <input type="email" class="form-control" placeholder="E-mail" id="email" required data-validation-required-message="Por favor insira seu e-mail." name="email">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Telefone</label>
                            <input type="tel" class="form-control" placeholder="Telefone" id="phone" required data-validation-required-message="Por favor insira seu telefone." name="phone">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <input type="hidden" name="date" id="date" value="<?=date('Y/m/d')?>">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Mensagem</label>
                            <textarea rows="5" class="form-control" placeholder="Mensagem" id="message" required data-validation-required-message="Por favor insira sua mensagem." name="message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>

   <!-- Footer -->
   <?php include("includes/rodape.php") ?>