<?php
/**
 * @param Depositando um Valor;
 */
function depositar(array $conta, float $adicionar): array{
    $conta['saldo'] += $adicionar;

    return $conta;
}
$contascorrentes = [
    "124.435.667-54"=>['titular'=>'Andre Panizza dos Santos','saldo'=>100]
];

$contascorrentes["124.435.667-54"] = depositar($contascorrentes["124.435.667-54"], 200);


$valores = $contascorrentes;
foreach($valores as $cpf => $contas){
    echo "Numero do CPF: " . " " . $cpf . "<br>"  . "Nome do Titular: " . $contas['titular'] . "<br>" . "Saldo Provisorio: " . $contas['saldo'] . " " . "<br>";
}


?>