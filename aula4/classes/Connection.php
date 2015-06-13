<?php

class Connection{

	$tipo
	function __construct($conexao="default"){
		
	 	$this->config= \Config::db();
	 	$this->conn =  new Pdo("mysql:");
	}

}
