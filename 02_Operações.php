<?php
/**
 * @param Operações matematicas em php.
 */
//Soma:
$idade = 21;

//minha idade daqui 10 anos:

$minhaidade_daqui10anos = $idade + 10;
echo ucwords("Minha idade daqui dez anos será de: <br>") . $minhaidade_daqui10anos."<br>";
echo "<br>";$

/*
*@param Subtração de valores:
*/
$minhaidade_daqui5anos = $idade - 5;

echo ucwords("Minha idade com menos 5 anos será de: <br>") . $minhaidade_daqui5anos."<br>";
echo "<br>";


//Multiplicação:
$minhaidademultiplicada = $idade * 2;
echo strtoupper("Minha idade multiplicada no multiplicador comum <br>"). $minhaidademultiplicada . "<br>";
echo "<br>";

//Divisão da Idade:
$minhaidadeDivisão = $idade / 2;
echo ucwords("Minha idade Dividida por 2 será de: <br>"). $minhaidadeDivisao . "<br>";
echo "<br>";
/*
*@param aqui temos as quatro operações matematicas para trabalhar com o PHP
*@param existem outros operadores <matematicos>
*@param Potencia:
*/ 
$dois_ao_cubo = 2 * 2 * 2;
echo ucwords("A potencia elevada ao cubo do valor de dois sera: <br>"). $dois_ao_cubo . "<br>";
echo "<br>";

// A outras formas de elevar um numero ao cubo:
$valor = 30;
$resultado = $valor**2;

echo ucwords("A variavel com o Valor de: { $valor } <br> Sera elevada ao Cubo com a função: <br>");
echo "<br>";
echo ucwords("Esse e o Resultado: <br>"). $resultado . "<br>";
echo "<br>";

/*
*@param Fim dos exemplos de funções matematicas 
*
*/
$restodadivisao = 10 % 3;
echo ucwords("O resto da Divisão Sera: <br>").$restodadivisao . "<br>";
echo "<br>";

/*
*@param Fim dos exemplos de funções Matematicas;
*/
?>
