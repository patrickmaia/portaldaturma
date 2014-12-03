<?php
require('mysql.php');


if(isset($_POST['nomeDisciplinaAdd'])){
$mysql = new MySQL;

$nomeDisciplinaAdd = $_POST['nomeDisciplinaAdd'];
$randId = $nomeDisciplinaAdd.time();
$idDisciplina = substr(md5($randId),0,6);
$idTurma = $_POST['turmaSelecionadaDisciplinaAdd'];
$idProfessor = $_POST['professorSelecionadoDisciplinaAdd'];

$sql = "INSERT INTO disciplinas(idDisciplina, idTurma, nomeDisciplina, idProfessor) VALUES ('$idDisciplina', '$idTurma', '$nomeDisciplinaAdd', '$idProfessor')";


$rs = $mysql->query($sql);
if($rs){
	$msg = 1;
}
else{
	$msg = 2;
}

header('location:/admin/Disciplinas.php?msg='.$msg.'&idDisciplina='.$idDisciplina);
}
?>