<?php
/**
 * @param Criei uma classe chamado conta;
 * @param apartir do PHP 7.4 posso definir o tipo do meu atributo:
 */

class Conta 
{
    public $nomeTitular;  
    public $cpfTitular;
    public $saldo;
    
}


$primeiraconta = new Conta(); 

/**
 * @param para acessar um atributo da minha conta eu:
 * @param Dessa forma eu acesso o saldo e atribuo um valor a ele dessa forma;
 */

$primeiraconta->saldo = 300; 
$primeiraconta->cpfTitular = '123.456.789-10';
$primeiraconta->nomeTitular = 'Andre Panizza dos Santos';

/**
 * @param acessando os valores individualmente:
 */
echo ucwords("CPF do Titular e: ") . $primeiraconta->saldo . "<br>";
echo ucwords("O nome do Titular e: ") . $primeiraconta->nomeTitular . "<br>";
echo ucwords("O valor do meu saldo e de: ") . $primeiraconta->saldo . "<br>";
echo "<br>";
/**
 * @param posso criar uma segundaconta vazia e definir os valores;
 */
$segundaconta = new Conta();
$segundaconta->saldo = 1000;
$segundaconta->cpfTitular = '237.216.498-85';
$segundaconta->nomeTitular = 'Stephanie Santos Lima';

?>