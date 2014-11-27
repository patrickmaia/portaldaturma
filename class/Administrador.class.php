<?php
require_once('Pessoa.class.php');
class Administrador extends Pessoa
{
	private $login;
	private $senha;
	private $turma;

	public function setLogin($login){
		$this->login=$login;
	}

	public function getLogin(){
		return $this->login;
	}

	public function setSenha($senha){
		$this->senha=$senha;
	}

	public function getSenha(){

		return $this->senha;
	}

	public function setTurma($turma){
		$this->turma=$turma;
	}

	public function getTurma(){
		return $this->turma;
	}

	public function criaAdmin($nome,$email,$matricula,$login,$senha,$turma){
		$this->setNome($nome);
		$this->setEmail($email);
		$this->setMatricula($matricula);
		$this->setLogin($login);
		$this->setSenha($senha);
		$this->setTurma($turma);
	}
}

?>