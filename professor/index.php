<?PHP
session_name('professor');
session_start();
if ( !isset($_SESSION['loginProfessor']) and !isset($_SESSION['senhaProfessor']) ) { 
    session_destroy();
    unset ($_SESSION['loginProfessor']);
    unset ($_SESSION['senhaProfessor']);
    header('location:../index.php');
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Professor</title>
    <link rel="shortcut icon" href="../res/transparent.gif" type="image/x-icon">
    <link rel="icon" href="../res/transparent.gif" type="image/x-icon">

    <!-- jQuery -->
    <script src="../res/js/jquery-2.1.0.min.js"></script>
    <!-- Ajax !-->
    <script type="text/javascript" src="../res/js/ajax.js"></script>
    <!-- Bootstrap !-->
    <link href="../res/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="../res/js/bootstrap.min.js"></script>
    <!-- Bootstrap Validator -->
    <link rel="stylesheet" href="../res/css/bootstrapValidator.css"/>
    <script type="text/javascript" src="../res/js/bootstrapValidator.js"></script>
    <!-- Simple Sidebar-->
    <link rel="stylesheet" href="../res/css/simple-sidebar.css" >


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    
  </head>
  <body>
  <div id="wrapper">

   <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Professor
                    </a>
                </li>
                <li>
                    <a href="Avisos.php" id="showAvisos">Avisos</a>
                </li>
               
                <li>
                    <a href="Envios.php">Envios</a>
                </li>
                <li>
                    <a href="Notas.php">Notas</a>
                </li>
              
            </ul>
        </div>
      <!-- Sidebar -->

<div id="page-content-wrapper">
  <nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">   <span class="glyphicon glyphicon-list"></span> Menu </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#"><i class="glyphicon glyphicon-cloud"></i> Dashboard</a></li>
          <li><a href="#"><i class="glyphicon glyphicon-user"></i> Perfil</a></li>

        </ul>
        
          
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Ajuda</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Opções <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#"> <i class="glyphicon glyphicon-cog"></i>  <i class="divider"></i>Editar Perfil</a></li>
             <li><a href="logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
      </div>
      </nav>
      </div>

      <!-- Funções do Sidebar -->
      <script type="text/javascript">
    $(document).ready(function(){
      $("#Avisos").click(function(){
        $("#conteudo").html(''

          );
      });
    });


       $(document).ready(function(){
        $("#showAlunos").click(function(){
          $("#conteudo").html('<div id="Pesquisar">\
                <div class="row">\
                  <div class="col-xs-3">\
                    <h3> Nome do Aluno: </h3>\
                    <input type="text" class="form-control" placeholder="" id="nomeAluno">\
                  </div>\
                </div>\
                <input type="button" class="btn btn-primary" name="btnPesquisar" style="margin-top:10px;"value="Pesquisar" onclick="getAluno();"/>\
            </div>\
            <hr/>\
            <h2>Resultados da pesquisa:</h2>\
            <div id="Resultado"></div>\
 </div>');
        });
      });


      
      </script> 
      <!-- Sidebar -->

       
<div id="page-content-wrapper"> <!--Importante encapsular o conteúdo da página com page-content-wrapper caso contrário o conteúdo irá invadir a sidebar. -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12" id="conteudo">
      Div Loader
    </div>
  </div>
 </div>
</div>




  </body>
</html>
