<?php


/**
 * Classe Generica do motor
 * 
 * @author Diego Souza
 * 
 */

class Motor 
{
    private $potencia = 1.0;
    private $tipoCombustivel = "Flex";
    private $aceleracao = 0; // Tem um método para acessar esse atributo
    
    /*
     * Acelerar o motor - motivo da funct
     * @param $valor int valor da aceleração de 0 a 100
     * @return int
     */
    
    
    public function acelerar($valor = 0)
    {
        $this->aceleracao = $valor;
        $potencia = $valor * $this->potencia;
        return $potencia;    // POderia ser: "return $valor * $this->potencia;"
    }
}
