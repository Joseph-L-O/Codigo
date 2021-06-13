<?php
/**
 * @param Tipos de dados em PHP
 * 
 */
$idade = 21; // e um tipo inteiro
/*Como eu consigo saber qual o tipo de Dado que estou manipulando no codigo 
Utilizando o Gettype*/

$salario = 1000.30; // tipo de dado Ponto Flutuante (ou Float);

echo "Esse e o tipo de dado que estou trabalhando ". gettype($idade) . "<br>";
// ele vai retornar o tipo da variavel;
echo "<br>";
echo "Esse numero e Float: ". gettype($salario) . "<br>";
echo "<br>";
//doble pode ser chamado de Float;

// dividindo:

$divisao = 10 / 3.0;
$resultado = $divisao - 3;
echo gettype($divisao);
echo "<br>";
echo gettype($resultado);


// O PHP e uma Linguagem Dinamicamente Tipada:
$texto = "Isso e uma condição de texto, ou uma frase";
echo "executando o gettype em uma variavel texto, ou string <br>";
echo "essa e a saida: ". gettype($texto);

// Agora vamos ver qual o tipo de Bolleanos como True ou False:
$verdadeiro = true;
$falso = false;
echo "esse e o tipo do verdadeiro: ".gettype($verdadeiro)."<br>";
echo "<br>";
echo "Esse e o tipo do Falso: ".gettype($falso)."<br";
echo "<br>";

//Tipos Primitivos em PHP



?>