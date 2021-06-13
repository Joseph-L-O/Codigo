<?php
/**
 * @param Trabalhando com arrays associativos;
 */
$conta1 = ['titular' => 20000,
          'saldo' => 1000];
$conta2 = ['titular' => 'Maria',
           'saldo' => 20000];
$conta3 = ['titular' => 'Alberto',
           'saldo' => 300];

$contascorrentes = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contascorrentes); $i++){
    echo $contascorrentes[$i]['titular'] . "<br>";
}

/**
 * @param aA funcão count conta o tamanho do array.
 * @param Se o contador inicializa com 0;
 */


?> 