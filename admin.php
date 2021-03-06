<?php
require "mostra-alerta.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Area | Login</title>

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
            <h1 class="text-center"> Admin Area <small>Login</small></h1>

          </div>
        </div>
      </div>
    </header>


    <sectioon id="main">
      <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <form id="login" action="model/efetuaLogin.php" class="well" method="post">
                  <div class="form-group">
                    <label>E-mail </label>
                    <input type="text" class="form-control" placeholder="Digite o Email" name="email">
                  </div>
                  <div class="form-group">
                    <label>Senha</label>
                    <input type="password" class="form-control" placeholder="Digite a Senha" name="senha">
                  </div>
                  <button type="submit" class="btn btn-default btn-block">Login</button>
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





    <!-- Editor de Texto -->
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>

    <!-- Bootstrap  JavaScript -->
    <script src="js/lib/jquery.js"></script>

    <script src="js/lib/bootstrap.min.js"></script>
  </body>
</html>
