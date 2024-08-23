<?php

$modelo = "kwid";
$marca = "Renault";
//echo $marca."\n".$modelo; //Concatenação de string


//Sintaxe de declaração de variáveis
$valor = 80000;
$licenciamento = 6000;
$valorTotal = $valor + $licenciamento;
$isBomba = true;


$var1 = 02;
$var2 = "02";
//echo $var1 === $var2; //false
//echo $var1 === $var2; //true


$teste = 'teste\nteste'; //Aspas simples não aceita caracteres especiais e variaveis
$teste1 = "marca: $marca \n modelo: $modelo";
//echo $teste1;


//Argv permite passar parâmetros via linha de comando
$america = $argv[1];
$asia = $argv[2];
$paises = "pais americano: $america, pais asiatico: $asia";
//echo $paises;


//Método match
$curso = "Sistemas de";
$area = match($curso){
    "Sistemas de informação" => "Exatas",
    default => "Valor Inválido"
};

echo $area;

?>

