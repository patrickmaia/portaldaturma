<?php 

require('mysql.php');


if(isset($_POST['novoAviso'])){
$mysql = new MySQL;
session_start();

$idAviso = rand(1,10);
$remetente = $_SESSION['nomeAdmin'];
$destinatario = $_POST['turmaSelecionada'];
$mensagem = $_POST['novoAviso'];

$sql = "INSERT INTO `Avisos`(`idAviso`, `Remetente`, `idTurma`, `Mensagem`) VALUES ('$idAviso','$remetente','$destinatario','$mensagem')";

$rs = $mysql->query($sql);


}

// echo $_SESSION['nomeAdmin']; //Destinatário
// echo $_POST['turmaSelecionada']; // ID da Turma
// echo $_POST['novoAviso']; // Cónteúdo




// Aviso = Remetente + Mensagem + Destinatário.

 ?>