<?php 
include("mysql.php");

$mySQL = new MySQL;
$rsAlunos = $mySQL->query("SELECT * FROM alunos;");
$rsAlunos_totalRows = mysql_num_rows($rsAlunos);

while($rsAlunos_rows = mysql_fetch_array($rsAlunos))
{
	echo $rsAlunos_rows["nomeAluno"];
}
 

 ?>
