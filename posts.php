<?php

require 'banco/conecta.php';
require "mostra-alerta.php";
require "config.php";

$sql_query = "SELECT * FROM noticias ORDER BY data DESC";
$retorno_query = mysqli_query($conecta, $sql_query);



$sql = "SELECT COUNT(*) AS numeros FROM admin";
$query = "SELECT * FROM admin";
$query_noticias = "SELECT COUNT(*) AS numeros FROM noticias";
$query_mensagens = "SELECT COUNT(*) AS numeros FROM mensagem";

$resultado_noticias = mysqli_query($conecta,$query_noticias);
$resultado_noticias = mysqli_fetch_assoc($resultado_noticias);
$resultado_mensagens = mysqli_query($conecta, $query_mensagens);
$resultado_mensagens = mysqli_fetch_assoc($resultado_mensagens);
$resultado = mysqli_query($conecta, $query);
$retorno = mysqli_query($conecta, $sql);
$retorno = mysqli_fetch_assoc($retorno);


$qtd = 10;
$total = 0;
$sql_noticias = "SELECT COUNT(*) AS c FROM noticias";
$sql_noticias = mysqli_query($conecta, $sql_noticias);
$sql_noticias = mysqli_fetch_assoc($sql_noticias);
$total =  $sql_noticias['c'];
$paginas = $total / $qtd;



$pg = 1;
if(isset($_GET['p']) && !empty($_GET['p'])){
    $pg = addslashes($_GET['p']);
}
$p = ($pg - 1) * $qtd;

$sql_query = "SELECT * FROM noticias ORDER BY id LIMIT $p, $qtd";
$retorno_query = mysqli_query($conecta, $sql_query);

if(isset($_SESSION['idAdmin'])){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Area | Posts</title>

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
          <ul class="nav navbar-nav">
            <li><a href="dash.php">Dashboard</a></li>
            <li><a href="mensagens.php">Mensagens</a></li>
            <li class="active"><a href="posts.php">Noticias</a></li>
            <li><a href="usuarios.php">Administradores</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Bem vindo , <?=$_SESSION['nome']?></a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!-- fim menu -->

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Noticias <small>Gerenciamento das Postagens</small></h1>

          </div>
          <div  class="col-md-2">
            <div class="dropdown menu-suspenso">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Configuracoes
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addPage">Adicionar Noticia</a></li>
                <li><a href="cadastro.php?add=true">Adicionar Administrador</a></li>
                <li><a href="editarconfig.php">Editar Configuracoes</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="linha-do-tempo">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="dash.php">Dashboard</a></li>
          <li class="active">Noticias</li>
        </ol>
      </div>
    </section>
    <sectioon id="main">
      <div class="container">
        <div class="row">
            <div class="col-md-3">
              <div class="list-group">
                <a href="dash.php" class="list-group-item active main-color-bg">
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
                </a>
                <a href="mensagens.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Mensagens <span class="badge"><?=$resultado_mensagens['numeros']?></span></a>
                <a href="posts.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Noticias <span class="badge"><?=$resultado_noticias['numeros']?></span></a>
                <a href="usuarios.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Administradores <span class="badge"><?=$retorno['numeros']?></span></a>
              </div>
            </div>
            <div class="col-md-9">

              <!-- Visao geral do site -->
              <div class="panel panel-default ">
                <div class="panel-heading main-color-bg">
                  <h3 class="panel-title">Noticias</h3>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12">
                      <?php
                            mostraAlerta("success");
                            mostraAlerta("danger");
                      ?>
                    </div>
                  </div>
                  <a type="button" data-toggle="modal" class="btn btn-danger" data-target="#addPage">Adicionar Noticia</a><br><br>
                  <table class="table table-striped table-hover">
                        <tr>
                          <th>Titutlo</th>
                          <th>Criado</th>
                          <th></th>
                          <th></th>
                        </tr>
                        <?php foreach ($retorno_query as $noticia): ?>
                          <tr>
                            <td><?=$noticia['titulo'] ?></td>
                            <td><?= date('d/m/Y', strtotime($noticia['data'])); ?></td>
                            <td><a class="btn btn-default" href="edit.php?id=<?=$noticia['id']?>">Editar</a></td> 
                            <td><a class="btn btn-danger" href="model/excluirNoticia.php?id=<?=$noticia['id'] ?>">Excluir</a></td>
                          </tr>
                        <?php endforeach ?>
                    </table>
                     <ul class="pager">
                            <li >
                               <?php
                                for($q = 0; $q < $paginas; $q++){
                                    echo '<a href="posts.php?p='.($q+1).'"> '.($q+1).'</a>';
                                }
                               ?>
                            </li>
                      </ul>
                </div>

              </div>
            </div>
        </div>
      </div>
    </sectioon>

    <footer id="footer">
      <p>Copyright <?=$retorno_config['nomeDaEmpresa']?>, &copy; 2017</p>
    </footer>

    <!-- Modals -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form action="model/addNoticia.php" method="post">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Adicionar Página</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                      <label>Titulo da Noticia</label>
                      <input type="text" class="form-control"   name="titulo">
                    </div>
                     <div class="form-group">
                      <label>Sub-titulo da Noticia</label>
                      <input type="text" class="form-control"   name="subTitulo">
                    </div>
                    <input type="hidden" name="data" value="<?=date('Y/m/d')?>">
                    <input type="hidden" value="<?=$_SESSION['nome']?>" name="nome">
                    <div class="form-group">
                      <label>Corpo da Noticia</label>
                      <textarea name="editor" id="editor" class="form-control" ></textarea>
                    </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
          </form>
        </div>
      </div>
    </div>



    
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


      $('#editor').trumbowyg('html',);
      </script>
    <!-- Bootstrap  JavaScript -->
    <script src="js/lib/jquery.js"></script>

    <script src="js/lib/bootstrap.min.js"></script>
  </body>
</html>
<?php
  }else{
    header("Location: admin.php");
    $_SESSION['danger'] = "Precisa estar logado para acessar essa funcionalidade";
  }