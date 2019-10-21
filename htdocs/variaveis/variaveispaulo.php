<?php 

/*
Declarar + concatenar variaveis
Concatenar: é exibir uma vairavel ao lado da outra usando o ponto final (.)

*/


//concatenar variaveis string

$nome = "paulo";
$sobrenome1 = "cesar";
$sobrenome2 = "borges";
$sobrenome3 = "rodrigues";

$nomeCompleto = $nome . " " . $sobrenome1 . " " . $sobrenome2 . " " . $sobrenome3;

echo $nomeCompleto;


//concatenar numeros (obs não é calculo, só vai mostrar um do lado do outro)

$meuDinheiro = 600;
$seuDinheiro = 660.80;

$totalDinheiro = $meuDinheiro . $seuDinheiro;

echo $totalDinheiro;


/*
teste de unset e isset etc..

unset($nomeCompleto);

if (isset($nomeCompleto)) {
 
	echo $nomeCompleto;
}

*/



 ?>