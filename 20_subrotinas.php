<?php

/**
 * @param Usando Metodos e Parametros;
 */
$contascorrentes = [
    "237.216.499-45" => ['titular' => "Stephanie Santos Lima", 'Saldo'    => 100    ],
    "254.266.488-88" => ['titular' => "Andre Panizza dos Santos", 'Saldo' => 100],
    "987.232.476-99" => ['titular' => "Ricardo dos Santos Neto", 'Saldo'  => 100] 
    
];

// condição pra subtração da conta:
$contascorrentes["254.266.488-88"]['Saldo'] += 500;
$contascorrentes["987.232.476-99"]['Saldo'] += 500;
$contascorrentes["237.216.499-45"]['Saldo']; 
echo "<br>";
$valor = $contascorrentes;
foreach($valor as $cpf => $contas){
    echo "<strong> CPF do Cliente:  </strong>" . $cpf . "<br>" . "<strong> Nome do Cliente: </strong>" .  $contas['titular'] . "<br>" . "<strong> Saldo da Conta:  </strong> " . $contas['Saldo'] . " " . "<br>";
    }



?>