<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal da Turma - Login</title>

    <!-- jQuery -->
    <script src="res/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="res/js/bootstrap.min.js"></script>
    <link href="res/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Validator -->
    <link rel="stylesheet" href="res/css/bootstrapValidator.css"/>
    <script type="text/javascript" src="res/js/bootstrapValidator.js"></script>
    <!-- -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<div class="center-block" style="width:50%;"> 
<p> O primeiro login irá disparar o auth no /professor/  e o segundo no /aluno/, assim a mesma página pode abrigar diferentes formulários de login. </p>
	<div class="container-fluid"> <!-- Início do Formulário de Login do Professor!-->
		<div class="row">
			<h2> <span class="glyphicon glyphicon-user"> </span> Professor </h2>
			<hr />
			<form class="form-horizontal" role="form" id="formLogin" method="post" action="professor/auth_professor.php">
	  				<div class="form-group">
	    				<label for="login" class="col-sm-2 control-label"> Login </label>
	        				<div class="col-sm-10">
	     						<input type="text" name="loginProfessor" id="loginProfessor" class="form-control" placeholder="Login">
	   						</div>
	 				 </div>
	  				<div class="form-group">
	   					<label for="senha" class="col-sm-2 control-label"> Senha </label>
	    					<div class="col-sm-10">
	    						<input type="password" name="senhaProfessor" id="senhaProfessor" class="form-control" placeholder="Senha">
	  						</div>
	  				</div>
	    			<div class="form-group">
	      				<div class="col-sm-offset-2 col-sm-10">
	        				<button type="submit"class="btn btn-success"> Login </button>
	      				</div>
	    			</div>
			</form> <!-- Fim do Formulário !-->
		 </div> 
	</div>

    <div class="container-fluid"> <!-- Início do Formulário de Login do Aluno !-->
        <div class="row">
            <h2> <span class="glyphicon glyphicon-user"> </span> Aluno </h2>
            <hr />
            <form class="form-horizontal" role="form" id="formLogin" method="post" action="aluno/auth_aluno.php">
                    <div class="form-group">
                        <label for="loginAluno" class="col-sm-2 control-label"> Login </label>
                            <div class="col-sm-10">
                                <input type="text" name="loginAluno" id="loginAluno" class="form-control" placeholder="Login">
                            </div>
                     </div>
                    <div class="form-group">
                        <label for="senhaAluno" class="col-sm-2 control-label"> Senha </label>
                            <div class="col-sm-10">
                                <input type="password" name="senhaAluno" id="senhaAluno" class="form-control" placeholder="Senha">
                            </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit"class="btn btn-success"> Login </button>
                        </div>
                    </div>
            </form> <!-- Fim do Formulário !-->
         </div> 
    </div>
</div>


<div id="footer" class="container">
	<nav class="navbar navbar-default navbar-fixed-bottom">
		<div class="navbar-inner navbar-content-center">
				<div class"center-block" style="text-align:center;margin-top:15px;"> <i class="glyphicon glyphicon-registration-mark"></i> Copyright © 2014

 </div>
	        </div>
	</nav>
</div>

</body>
</html>
