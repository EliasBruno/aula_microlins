<?php

interface iPessoaA
{
	
	public function getNome();
	public function setNome($nome);

}

/*interface iPessoaB extends iPessoaA
{

	public function cpf($cpf);

}*/

class iPessoa implements iPessoaA
{

	private $nome;
	private $cpf;

	public function getNome(){

		return $this->nome;

	}

	public function setNome($nome){

		$this->nome = $nome;

	}

	public function cpf($cpf){

		return $this->cpf = $cpf;

	}
}

?>