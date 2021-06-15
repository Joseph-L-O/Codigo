<?php
// sistema de depositos de banco:
$contascorrentes = [
    "123.456.774-56" => ['titular'=>'Arcanjo_Renegado','Saldo'=>100],
    "234.555.432-58" => ['titular'=> 'Onichan','Saldo' => 100],
    "341.654.456-90" => ['titular'=> 'Vulgo_Pato','Saldo'=>100]
];
/**
 * @param ContasCorrentes;
 * @param Atualização na programação Procedural
 */

$contascorrentes["123.456.774-56"]['Saldo']-=1000; 
$contascorrentes["234.555.432-58"]['Saldo']-=900; 
echo "<br>";
if(500 > $contascorrentes["341.654.456-90"]['Saldo'])
{
    echo ucwords("Voce não pode sacar esse valor <br>");
    echo "<br>";    
}
else{
    $contascorrentes["341.654.456-90"]['Saldo']-=500;
}
$valor  = $contascorrentes;
foreach($valor as $cpf => $contas){
    echo ucfirst("<strong> Nome do Titular da Conta:</strong>"). "  " . $contas['titular']." "."<br>".ucfirst("N° CPF: ").$cpf." " ."<br>".ucfirst("Ganha Quanto em R$: ").$contas['Saldo']." "."<br>";
}
?>
