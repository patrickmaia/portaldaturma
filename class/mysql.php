<?php 
class MySQL{
	var $host="localhost";
	var $user="root";
	var $password="root";
	var $database="portaldaturma";

	var $query;
	var $link;
	var $result;

	function MySQL()
	{
		//

	}

	function connect()
	{
		$this->link=mysql_connect($this->host,$this->user,$this->password);
		if(!$this->link)
		{
			echo "Falha na conexão. Verifque as credenciais e o endereço do servidor.";
			echo "Erro: ". mysql_errno();
			die();
		}
		elseif (!mysql_select_db($this->database,$this->link)) 
		{
			echo "O banco de dados não está acessível.";
			echo "Erro:".mysql_errno();
			die();
		}

	}

	function query($query)
	{
		$this->connect();
		$this->query=$query;
		if($this->result=mysql_query($this->query))
		{
			$this->disconnect();
			return $this->result;
		}
		else
		{
			echo "Ocorreu um erro durante a query ao SGBD.";
			echo "Erro: ".mysql_errno();
			die();
			disconnect();
		}

	}
	
	function disconnect(){
		return mysql_close($this->link);
	}
}

 ?>