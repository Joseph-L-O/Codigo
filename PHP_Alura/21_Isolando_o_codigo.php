<?php
/**
 * @param Isolando o Codigo:
 * @param function sacar($conta,$valorAsacar)
 * @param Note que uma função so conhece as variaveis definidas dentro dela:
  */
{
    if($valorAsacar > $conta['saldo']){
        echo ucwords("<br> Você não pode sacar esse valor, Saldo insufuciente");
    }else{
             $conta['saldo'] -= $valorAsacar;
    }
    return $conta;
}
  $contascorrentes = [
      "237.216.498-85" => ['titular'=>'Stephanie Santos Lima'
      ,'saldo'=>25000],
      "357.848.948-46" => ['titular'=>'Andre Panizza dos Santos',
      'saldo'=>30000],
      "248.104.554-99" => ['titular'=>'Alexandre falker dos santos',
      'saldo'=>28300]
    ];
    /**
     * @param pra sacar o valor da conta da stephanie eu preciso passar a conta, e o valor de 5000 reais
     */
    $contascorrentes["237.216.498-85"] = sacar($contascorrentes["237.216.498-85"]);
    $contascorrentes["248.104.554-99"]['saldo'];
    if(500 > $contascorrentes["248.104.554-99"]['saldo']){
        echo ucwords("<br> Você não pode sacar esse valor, Saldo insuficiente");
    }else{
   $contascorrentes["248.104.554-99"]['saldo']-=500;
    }
  $valor = $contascorrentes;
foreach($valor as $cpf => $contas){
    echo " <strong> CPF: </strong>".$cpf."<br>"."<strong> Nome do titular: </strong>".$contas['titular']."<br>" . "<strong> Saldo da conta: </strong>".$contas['saldo']."<br>";
}

?>