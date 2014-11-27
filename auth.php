<?PHP
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['login'];
$senha = $_POST['senha'];
 
//Conexão mysql
$hostname="localhost";
$username="root";
$password="root";

$conexao = mysql_connect($hostname, $username, $password) or die ("Erro na conexão do banco de dados.");
 
//Seleciona o banco de dados
$database="portaldaturma";
$selecionabd = mysql_select_db($database,$conexao) or die ("Banco de dados inexistente.");
 
//Comando SQL de verificação de autenticação
$sql = "SELECT *
FROM auth
WHERE login = '$login'
AND senha = '$senha'";
 
$resultado = mysql_query($sql,$conexao) or die ("Erro na seleção da tabela.");
 
//Caso consiga logar cria a sessão e redireaciona pro index (dashboard)
if (mysql_num_rows ($resultado) > 0) {
    // session_start inicia a sessão
    session_start();
     
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    header('location:index.php');
}
 
//Caso contrário redireciona para a página de autenticação
else {
    //Destrói
    session_destroy();
 
    //Limpa
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
 
    //Redireciona para a página de autenticação
    header('location:login.php');
     
}
?>