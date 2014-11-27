<?php 

if(isset($_GET["nomeAluno"])){
	$nome = $_GET["nomeAluno"];

	$server = "localhost";
	$user = "root";
	$senha = "root";
	$base = "portaldaturma";

	$conexao = mysql_connect($server,$user,$senha) or die("Erro na conexão ");
	mysql_select_db($base);

	if(empty($nome)){
		$sql = "SELECT * FROM alunos";
	}else{
		$nome.="%";
		$sql = "SELECT * FROM alunos WHERE nomeAluno LIKE '$nome'";
		
	}
	sleep(1);
	$result = mysql_query($sql);
	$cont = mysql_affected_rows($conexao);

	if($cont>0){
		$tabela = "<table class='table table-striped'>
						<thead>
							<tr>
							<th>ID </th>
							<th>Nome </th>
							<th>Turma </th>
							</tr>
						</thead>
						<tbody>
						<tr>";
		$return = "$tabela";

		while($linha = mysql_fetch_array($result)){
			$return.="<td>" . utf8_encode($linha["idAluno"]) . "</td>";
			$return.="<td>" . utf8_encode($linha["nomeAluno"]) . "</td>";
			$return.="<td>" . utf8_encode($linha["turmaAluno"]) . "</td>";
			$return.="</tr>";
		}
		echo $return.="</tbody></table>";
	} else{
		echo "Não foram encontrados.".$nome;
	}
}


 ?>