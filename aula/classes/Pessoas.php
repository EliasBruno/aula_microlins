<?php

abstract class Pessoas
{
	abstract protected function nome();
	abstract protected function setNome($nome);

	function getNome()
	{

		echo $this->nome();

	}

}

?>