<?php

class carro
{

	public $cor;
	private $motor = 1.0;
	private $porta = 4;
	private $modelo = "A3"; //
	private $marca = "AUDI";
 	private	$tanqueCombustivel;

	public function __construct($cor = "Branco")
	{
            $this->tanqueCombustivel = 10;	
	    $this->cor = $cor;
	}
	
	public function ligar()
	{
  	    
	}			
	
	public function desligar()
	{

	}

	public function andar()
	{
		
	}
	
	public function abastecer($valor)
	{
	    $this->tanqueCombustivel = $valor;	
		
	}

}


