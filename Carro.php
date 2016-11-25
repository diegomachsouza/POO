<?php

class carro
{
    
    const MODELO = "A3";
    const MARCA = "AUDI";

    public $cor;
    private $motor;
    private $porta = 4;
    private $modelo = "A3"; //
    private $marca = "AUDI";
    private $tanqueCombustivel;
        
        /**
         * 
         * @param Motor $motor
         * @param string $cor
         */

	public function __construct(Motor $motor, $cor = "Branco")
	{
            $this->tanqueCombustivel = 10;	
	    $this->cor = $cor;
            $this->motor = $motor;
	}
	
        /**
         * Liga o motor
         */
	public function ligar()
	{
  	    
	}			
	
        /**
         * Desliga o motor
         */
	public function desligar()
	{

	}
        
        /**
         * Faz o carro andar
         * @param int $torque
         */
	private function andar($torque)  //O motor faz o carro andar
	{
            echo 'Andou'.$torque."Metros\n";
		
	}
        
        /**
         * Envia a aceleração ao motor
         * @param int $valor VAlor da aceleração informada
         */
        public function acelerar($valor) // Eu acelero o motor, e ele faz acelerar o carro
        {
            $torque = $this->motor->acelerar($valor);
            
        }
	
        /**
         * Abastece o veiculo
         * @param int $valor a ser colocado no veículo
         */
	public function abastecer($valor)
	{
	    $this->tanqueCombustivel = $valor;	
		
	}

}


