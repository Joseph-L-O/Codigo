<?php
/**
 * @param Manipulando dados de Array;
 */
$contacorrente = [
    '237.216.490-77' => ['titular' => 'Stephanie Santos Lima', 'Saldo' => 20000],
    '248.745.990-70' => ['titular' => 'Andre Panizza dos Santos', 'Saldo' => 30000],
    '456.098.675-55' => ['titular' => 'Reinaldo de Souza Senna', 'Saldo' => 40000],
    '546.088.765-67' => ['titular' => 'Alexandre Frota de Oliveira', 'Saldo' => 50000]
];
/**
 * @param Passando valores com Foreach;
 */
$valores = $contacorrente;

foreach ($valores as $cpf => $conta){
    echo $cpf." "."<br>".$conta['titular']." "."<br>".$conta['Saldo']." "."<br>";
}

?>