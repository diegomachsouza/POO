<pre>
<?php
require_once "Carro.php";
require_once 'Motor.php';  //Não há diferença entre aspas simples e duplas

$motor = new Motor();

$veiculo1 = new Carro($motor, "Preto");
$veiculo2 = clone $veiculo1;

$veiculo2->cor = "Vermelho";
$veiculo2->abastecer(20);

$veiculo1->acelerar(40);
var_dump($veiculo1);   ///Pegou a cor e o motor default
	

echo 'Acelerado em '.$veiculo1->acelerar(10)." km/h \n";

// Usa=-se o Apache 