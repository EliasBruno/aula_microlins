<?php

trait File{

	public function getFile($path){
		if(file_exists($path))
			return include($path);
		else
			throw new Exception("Arquivo $path não encontrado!");
	}	
} 
