<?php 
include_once('class.MySQL.php');
$mysqlName = 'portaldaturma';
$mysqlUserName = 'root';
$mysqlPassword = 'root';

$oMySQL = new MySQL($mysqlName,$mysqlUserName,$mysqlPassword);
$query="SELECT * FROM alunos";
$rsAlunos = $oMySQL->executeSQL($query);

$results = $oMySQL->arrayResults();

print_r $results;
// $rsAlunos = $mySQL->query("SELECT * FROM alunos;");
// $rsAlunos_totalRows = mysql_num_rows($rsAlunos);

// while($rsAlunos_rows = mysql_fetch_array($rsAlunos))
// {
// 	echo $rsAlunos_rows["nomeAluno"];
// }
 

 ?>
