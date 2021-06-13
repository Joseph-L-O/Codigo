<?php
//criando uma classe:

class Conta{
    public  $saldo;
    public  $cpfTitular;
    public  $nomeTitular;

public function sacar( float $valorAsacar)
{
    if($valorAsacar > $this->saldo)
    {
        echo "não e possivel sacar este valor";

    }else{
        $this->saldo -= $valorAsacar;
    }
   }
}

$primeiraconta = new Conta;
$primeiraconta->saldo = 1000;
$primeiraconta->cpfTitular = "123.322.124.22";
$primeiraconta->nomeTitular = "Andre Panizza dos Santos";
$segundaconta = new Conta;
$segundaconta->saldo = 2000;
$segundaconta->cpfTitular = "334.333.221.32";
$segundaconta->nomeTitular = "Raul Gazola dos Santos Neto";

$primeiraconta->sacar(500);
echo $primeiraconta->saldo . "<br>";
echo "<br>";
$segundaconta->sacar(1000);
echo $segundaconta->saldo . "<br>";
echo "<br>";

/**
 * @param Criando um array e passando o valor;
 */
$contacorrente = [
    "234.456.786.89" => ['titular' => 'Andre panizza dos Santos', 'saldo' => 1000],
    "234.876.908.77" => ['titular' => 'Raul gazola dos santos Neto','saldo'=>500]
];
$contacorrente['234.456.786.89']['saldo'] -= 500;
$contacorrente['234.876.908.77']['saldo'] += 500;

$valor = $contacorrente;

/** 
 * @param Usando um foreach para mostrar os valores;
 */
foreach($valor as $cpf => $contas){
    echo ucwords("CPf do Titular") . " " . $cpf . "<br>" . ucwords("Nome do Titular") . $contas['titular'] . " " . ucwords("Saldo da conta") . $contas['saldo'] . " " . "<br>";
}



?>