<?php
/**
 * @param Criando uma classe com atributos;
 */
class Conta {
    public $cpfTitular;
    public $saldo;
    public $nomeTitular;

}
/**
 * @param  agora que ja declarei minha classe conta vou instanciar os objetos; 
 */
$primeiraconta = new Conta();
/**
 * @param Adicionando atributos a conta: 
 */
$primeiraconta->saldo = 200;
$primeiraconta->cpfTitular = "357.848.948.46";
$primeiraconta->nomeTitular = "Andre Panizza dos Santos";
/**
 * @param agora vou criar uma nova instancia de conta; 
 */
$segundaconta = new Conta();
//agora vou instanciar os valores desse novo objeto nos atributos: 
$segundaconta->saldo = 500;
$segundaconta->cpfTitular = "237.216.498.85";
$segundaconta->nomeTitular = "Stephanie Santos Lima";
// exibindo os valores de primeira conta:
echo ucwords("Nome do Titular: ").$primeiraconta->nomeTitular."<br>";
echo ucwords("CPF do Titular N°:").$primeiraconta->cpfTitular."<br>";
echo ucwords("O meu saldo: ").$primeiraconta->saldo."<br>";
echo "<br><br>";
//exibindo os valores da segunda conta:
echo ucwords("<b> Saldo da Segunda Conta: </b>").$segundaconta->saldo."<br>";
echo ucwords("<b> CPF do Titular da segunda conta:  </b>").$segundaconta->cpfTitular."<br>";
echo ucwords("<b> Nome do Titular da Segunda Conta: </b>").$segundaconta->nomeTitular."<br>";
echo "<br>";











?>