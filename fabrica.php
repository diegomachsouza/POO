<?php
require_once "Carro.php";

$veiculo1 = new Carro("Preto");
$veiculo2 = new Carro();

$veiculo2->abastecer(20);

var_dump($veiculo1, $veiculo2);   ///Pegou a cor default
	
echo $veiculo2::MODELO."\n";

