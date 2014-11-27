
<?PHP
// Irá checar se existe mesmo um professor com essas credenciais, caso positivo criar uma sessão.
include('../class/PDO.class.php'); 
$login = $_POST['loginProfessor'];
$senha = $_POST['senhaProfessor'];

$stmt = $pdo->prepare("SELECT * FROM auth_professor WHERE loginProfessor = :logProf AND senhaProfessor = :senProf "); 
$stmt->bindParam(':logProf', $login,PDO::PARAM_STR);
$stmt->bindParam(':senProf', $senha,PDO::PARAM_STR);

$stmt->execute();
$obj= $stmt->fetchObject();

if($obj){
	session_start();
	//Armazena detalhes cruciais na sessão iniciada.
	$_SESSION['login'] = $login;
	$_SESSION['senha'] = $senha;	

	header('location:index.php');

} else{
	printf("oloco");
	session_destroy();
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:../index.php');
}

?>

