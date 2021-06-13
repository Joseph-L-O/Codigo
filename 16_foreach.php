<?php
// criado um array associativo:
$conjuntoconta = [

       '123.456.789.00'=>['titular'=>'Andre', 'Saldo'=>23000],
       '133.556.789.72'=>['titular'=>'Marcio','Saldo'=>40000],
       '234.523.468.99'=>['titular'=>'Ana_Paula','Saldo'=>45000]
    ];
    /**
     * @param estou modificando os indices dessa lista;
     * @param usando o foreach: (para cada uma $contascorrentes como $conta)

     */

//for($i = 0; $i < count($contascorrentes);$i++){
//    echo $contacorrentes[$i]['titular'];
//}

echo "<br>";
/**
 * @param Adionar contas correntes;
 */
$conjuntoconta['123.454.433.22'] = [
    'titular' => 'Claudia',
    'Saldo' => 590000
];

    foreach($conjuntoconta as $cpf => $conta){
        echo "Cpf do cliente: " . " "  .$cpf . " <br> " . " Nome da Pessoa " . " " .  $conta['titular'] . "<br> " . "Saldo da Conta R$ " . " " . $conta['Saldo'] . "<br>";
    /**
     * @param Nota seu Inverter na minha lista da variavel $conjuntoconta fica variaveis corretas
     */
        
    }





?>