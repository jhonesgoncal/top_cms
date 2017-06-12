<?php
require "mostra-alerta.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Area | Cadastro</title>

    <!-- Bootstrap  CSS -->
    <link href="css/lib/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

  </head>

  <body>

    <!-- inicio menu -->
    <nav class="navbar navbar-default ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">AdminTop</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!-- fim menu -->

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center"> Admin Area <small>Cadastro</small></h1>

          </div>
        </div>
      </div>
    </header>


    <sectioon id="main">
      <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <?php 
                $add = false;
                if($_GET['add'] == "true"){
                  $add = true;
                }
              ?>
              <form id="login" action="model/efetuaCadastro.php?add=<?=$add?>" class="well" method="post">
                  <div class="form-group">
                    <label>Nome </label>
                    <input type="text" class="form-control" placeholder="Digite o  nome" name="nome">
                  </div>
                  <div class="form-group">
                    <label>E-mail </label>
                    <input type="email" class="form-control" placeholder="Digite o Email" name="email">
                  </div>
                  <div class="form-group">
                    <label>Senha </label>
                    <input type="password" class="form-control senha" placeholder="Digite a Senha" name="senha" >
                  </div>
                  <div class="form-group">
                    <label>Confirmar Senha</label><span class="confirma alert-danger"></span>
                    <input type="password" class="form-control confirma-senha" placeholder="Confirme a Senha" name="confirma-senha">
                  </div>
                  <button type="submit" class="btn btn-default btn-block">Cadastrar</button>
                  <?php
                    mostraAlerta("success");
                    mostraAlerta("danger");
                  ?>
              </form>
            </div>
        </div>
      </div>
    </sectioon>

    <footer id="footer">
      <p>Copyright infoTech, &copy; 2017</p>
    </footer>





   

    <!-- Bootstrap  JavaScript -->
    <script src="js/lib/jquery.js"></script>

    <script src="js/lib/bootstrap.min.js"></script>
    <script>
    var senha = $('.senha');
    var confirma_senha = $('.confirma-senha');
    var campo  = $('.confirma-senha');

      campo.on('input', function () {
          if((senha.val() != confirma_senha.val()) && (senha.val() != "")) {
              $('.confirma').text(" - Senha precisa ser iguais");
          }
          else if(senha.val() == confirma_senha.val()){
              $('.confirma').text("");
          }
          if(senha.length == 0 || confirma_senha == 0){
             $('.confirma').text("");
          }

      });

    </script>
  </body>
</html>

