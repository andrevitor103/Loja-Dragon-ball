<?php

class Template
{
	
	function __construct()
	{

	}

	public function render($arr = [], $file = []){
		foreach ($file as $key => $value) {
			if(file_exists('arquivos/'.$value)){
				$arquivo = file_get_contents('arquivos/'.$value);
				echo $arquivo;
			}
		}
		
	}
}