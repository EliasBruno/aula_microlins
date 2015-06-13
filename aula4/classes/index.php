<?php
function __autoload($class){
	include "$class".".php";
}
use \Connection;

class Pessoas extends Connection{
	
}

$pessoas= new Pessoas();
