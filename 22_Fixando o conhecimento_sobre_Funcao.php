<?php
/**
 * @param Passandp dois valor como parametros;
 */
function sacar($conta,$valorAsacar)
{
    if($valorAsacar > $conta['saldo']){
        echo "Não e Posivel sacar o valor " . PHP_EOL;
    }else{
        $conta['saldo'] -= $valorAsacar;
    }
    return $conta;
}
//praticando um pouco mais sobre funções:
$contascorrentes = [
//array definido:
"124.104.248-99" => ['titular'=>'Alexia Bueno dos Santos',  'saldo' => 30000],
"234.456.324-87" => ['titular'=>'Rodrigo dos Santos Alves', 'saldo'=>  30000],
"234.789.675-81" => ['titular'=>'Andre Panizza dos Santos', 'saldo'=>  30000],
"456.890.123-00" => ['titular'=>'Reinaldo de Souza Senna',  'saldo' => 30000]
];
//passando parametros pra função:
$contascorrentes["124.104.248-99"] = sacar($contascorrentes["124.104.248-99"], $valorAsacar);
// usando o foreach:
foreach($contascorrentes as $cpf => $contas){
    echo "Numero do CPF:".$cpf."<br>"."Nome do Titular:".$contas['titular']."<br>"."Saldo Provisorio:".$contas['saldo']."<br>";
}
?>
 
