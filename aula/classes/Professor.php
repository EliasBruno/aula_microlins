<?php

class Professor extends Pessoas
{

	public function nome()
	{

		return $this->nome;

	}
	
	public function setNome($nome)
	{

		$this->nome = $nome;

	}

}

?>