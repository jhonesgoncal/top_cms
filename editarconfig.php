<?php
require "mostra-alerta.php";
require 'banco/conecta.php';

$sql = "SELECT * FROM config";

$resultado = mysqli_query($conecta, $sql);
$retorno = mysqli_fetch_assoc($resultado);

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
    <!--  Editor -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.1.1.min.js"><\/script>')</script>
    <link rel="stylesheet" href="//cdn.rawgit.com/Alex-D/Trumbowyg/v2.5.1/dist/plugins/colors/ui/trumbowyg.colors.min.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/Alex-D/Trumbowyg/v2.5.1/dist/ui/trumbowyg.min.css">   
  

    <link rel="stylesheet" href="componentes/trumbowyg/dist/ui/trumbowyg.min.css">
    <link rel="stylesheet" href="componentes/trumbowyg/dist/plugins/colors/ui/trumbowyg.colors.min.css">    
    <link rel="stylesheet" href="componentes/trumbowyg/dist/plugins/colors/ui/trumbowyg.colors.css">
    <script src="componentes/trumbowyg/dist/trumbowyg.js"></script>
    <script src="componentes/trumbowyg/dist/langs/pt.min.js"></script>  
    <script src="componentes/trumbowyg/dist/plugins/upload/trumbowyg.upload.js"></script>
    <script src="componentes/trumbowyg/dist/plugins/colors/trumbowyg.colors.js"></script>

    <link rel="stylesheet" href="css/style.css">

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
            <h1 class="text-center"> Bem vindo ao Top CMS <small>Configure o seu site aqui!</small></h1>

          </div>
        </div>
      </div>
    </header>


    <sectioon id="main">
      <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <form id="login" action="model/efetuaConfig.php?editar=true" class="well" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Nome do Site</label>
                      <input type="text" class="form-control" value="<?=$retorno['nome']?>" name="nome" required>
                    </div>
                    <div class="form-group">
                      <label>Nome do Empresa</label>
                      <input type="text" class="form-control" value="<?=$retorno['nomeDaEmpresa']?>" name="nome-empresa" required>
                    </div>
                    <div class="form-group">
                      <label>Url</label>
                      <input type="text" class="form-control" value="<?=$retorno['base_url']?>" name="url" required>
                    </div>
                    <div class="form-group">
                      <label>Facebook</label>
                      <input type="text" class="form-control" value="<?=$retorno['facebook']?>" name="facebook" required>
                    </div>
                    <div class="form-group">
                      <label>Twitter</label>
                      <input type="text" class="form-control" value="<?=$retorno['twitter']?>" name="twitter" required>
                    </div>
                    <div class="form-group">
                      <label>LinkedIn</label>
                      <input type="text" class="form-control" value="<?=$retorno['linkedin']?>" name="LinkedIn" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Sobre</label>
                      <textarea  class="form-control" rows="20"  name="sobre" id="editor" required><?=$retorno['sobre']?></textarea>
                    </div>
                  </div>
                </div>
                  <button type="submit" class="btn btn-default btn-block">Editar</button>
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
<script type="text/javascript">


  $('#editor')
            .trumbowyg({
              lang: 'pt',
                btnsDef: {
                    // Create a new dropdown
                    image: {
                        dropdown: ['insertImage', 'upload','insertImageServer'],
                        ico: 'insertImage',                        
                    },

                },
                // Redefine the button pane
                btns: ['viewHTML',
                        '|', 'formatting',
                        '|', 'btnGrp-semantic',
                        '|','foreColor',
                '|', 'backColor',
                        '|', 'link',
                        '|', 'image',
                        '|', 'btnGrp-justify',
                        '|', 'btnGrp-lists',
                        '|', 'horizontalRule',
                        '|', 'viewHTML',
                        '|', 'formatting',
                    '|', 'superscript',
                    '|', 'subscript',
                    '|', 'removeformat', 
                '|', 'fullscreen',  
                
                      ],
                autogrow: true ,
                btnsAdd: ['foreColor', 'backColor'],
            });


$('#editor').trumbowyg('html');
</script>


    <!-- Bootstrap  JavaScript -->
    <script src="js/lib/jquery.js"></script>

    <script src="js/lib/bootstrap.min.js"></script>
  </body>
</html>
