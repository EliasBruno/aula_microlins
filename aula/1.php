<?php

require_once("autoload.php"); 
//use classes\iPessoa;

/** Classe pessoa **/
$p = new Pessoa("Vinícius Hacebe");
echo $p->getNome();

echo "<br>";

/** Classe iPessoa (implementa Interface iPessoaA) **/
$p = new iPessoa();
$p->setNome("Rodrigo Henrique");
echo $p->getNome();

echo "<br>";

/** Classe Professor (extende classe abstrata Pessoas) **/
$p = new Professor();
$p->setNome("Elias Bruno");
$p->getNome();

echo "<br>";

/** Classe Funcionario (Injeção de dependencia) **/
$f = new Funcionario(new Data());




?>