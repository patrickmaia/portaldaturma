<?php 

if(isset($_GET["nomeProfessor"])){
	$nome = $_GET["nomeProfessor"];

	$server = "localhost";
	$user = "root";
	$senha = "root";
	$base = "portaldaturma";

	$conexao = mysql_connect($server,$user,$senha) or die("Erro na conexão ");
	mysql_select_db($base);

	if(empty($nome)){
		$sql = "SELECT * FROM professores";
	}else{
		$nome.="%";
		$sql = "SELECT * FROM professores WHERE nomeProf LIKE '$nome'";
		
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
							<th>Disciplina </th>
							</tr>
						</thead>
						<tbody>
						<tr>";
		$return = "$tabela";

		while($linha = mysql_fetch_array($result)){
			$return.="<td>" . utf8_encode($linha["idProf"]) . "</td>";
			$return.="<td>" . utf8_encode($linha["nomeProf"]) . "</td>";
			$return.="<td>" . utf8_encode($linha["Disciplina"]) . "</td>";
			$return.="</tr>";
		}
		echo $return.="</tbody></table>";
	} else{
		echo "Não foram encontrados.".$nome;
	}
}


 ?>