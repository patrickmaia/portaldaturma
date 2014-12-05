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
                        <?php echo $_SESSION['nomeProfessor']; ?>
                    </a>
                </li>
                <li>
                    <a href="Avisos.php" id="showAvisos">Avisos</a>
                </li>
               
                <li>
                    <a href="Envios.php" id="showEnvios">Envios</a>
                </li>
                <li>
                    <a href="Notas.php" id="showNotas">Notas</a>
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
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cloud"></span> Dashboard <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="Avisos.php" id="showAvisos">Avisos</a></li>
              <li><a href="Envios.php" id="showEnvios">Envios</a></li>
              <li><a href="Notas.php" id="showNotas">Notas</a></li>
            </ul>
          </li>
          <li><a href="#"><i class="glyphicon glyphicon-user"></i> Perfil</a></li>

        </ul>
        
          
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Ajuda</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Opções <b class="caret"></b></a>
            <ul class="dropdown-menu">
             <li><a href="logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
      </div>
      </nav>
      </div>



       
<div id="page-content-wrapper"> <!--Importante encapsular o conteúdo da página com page-content-wrapper caso contrário o conteúdo irá invadir a sidebar. -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12" id="conteudo">
<?php 
require('../class/mysql.php');
$mysql = new MySQL;
// Pega os Alunos da Turma e imprime a tabela pra inserir notas //
if(isset($_GET['turmaSelecionada'])){
 
$turmaSelecionada = $_GET['turmaSelecionada'];
$disciplinaSelecionada = $_GET['disciplinaSelecionada'];

echo $turmaSelecionada;
echo $disciplinaSelecionada;
 
$result = $mysql->query("SELECT * FROM alunos WHERE turmaAluno = '$turmaSelecionada'");
$linhas = mysql_num_rows($result);
                echo "<table class='table table-hover'>";
                echo "<thead<tr><td> Aluno </td><td> Primeiro </td><td> Segundo</td><td> Terceiro</td><td>Quarto </td><td>Enviar</td></tr></thead>";
                echo "<tbody>";
                while ($row = mysql_fetch_array($result)){
                $id = $row["idAluno"];  
                $nome = $row["nomeAluno"];
               
                echo '<form method="POST" action="insertNota.php?idAluno='.$id.'&idDisciplina='.$disciplinaSelecionada.'">';
                // echo "<form action='insertNota.php?idAluno=".$id."' method'GET'>";

                echo "<tr><td> $nome </td><td> <input type='text' name='pri'/></td><td><input type='text' name='seg'/> </td><td><input type='text' name='ter'/> </td><td><input type='text' name='qua'/> </td><td> <input type='submit' value='Enviar'/> </td></tr>";
                echo "</form>";
                }
                echo "</tbody>";
                echo "</table>";

 
// @$idAluno = $_REQUEST['idAluno'];
// @$primeiro_bimestre = $_GET["pri"];
// @$segundo_bimestre = $_GET['seg'];
// @$terceiro_bimestre = $_GET['ter'];
// @$quarto_bimestre = $_GET['qua'];

}
 ?>

 <?php
@$idAluno=$_GET['idAluno'];
@$idDisciplina=$_GET['idDisciplina'];
@$nota1=$_POST['pri'];  
@$nota2=$_POST['seg'];
@$nota3=$_POST['ter'];  
@$nota4=$_POST['qua'];  

$arrayNotas = array($nota1, $nota2, $nota3, $nota4);
$NotaEnviar = implode("-", $arrayNotas);

print $NotaEnviar;

require_once('../class/mysql.php');
$mysqlEnvio = new MySQL;
// $queryNotas = ("INSERT INTO notas(idDisciplina, idAluno, nota) VALUES ('$idDisciplina', '$idAluno', '$NotaEnviar')");
$resultEnviarNotas = $mysqlEnvio->query("INSERT INTO notas(idDisciplina, idAluno, nota) VALUES ('$idDisciplina', '$idAluno', '$NotaEnviar') ");
 ?>

</div>
 </div>
</div>

  </body>
</html>
