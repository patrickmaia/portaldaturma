<?php 
require('mysql.php');
$mysql = new MySQL;

if(isset($_GET["nomeTurma"])){
$idTurma = rand(4, 100);
$nome = $_GET["nomeTurma"];
$sql = "INSERT INTO turmas(idTurma, Turma) VALUES('$idTurma', '$nome')";

$rs = $mysql->query($sql);
if(!$rs){
echo "Turma não adicionada.";}
else{
echo "Turma adicionada - ".$nome;}

}



 ?>