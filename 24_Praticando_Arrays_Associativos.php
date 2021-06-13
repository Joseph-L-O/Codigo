<?php

/**
 * @param Dados dos veiculos;
 * @param como trabalhamos com contas de bancos, poderiamos trabalhar com um concessionaria de carros;
 */

$veiculos = [
    "fiat"      => ['veiculo' => 'Uno Mille Fire Flex','valor' => 20000, 'cor' => 'Vermelho','placa' => 'AZY-5433'],
    "chevrolet" => ['veiculo' => 'Onix LS 1.0 Flex MT','valor' => 32000, 'cor' => 'Branco','  placa' => 'FQN-6184'],
    "volkswagem"=> ['veiculo' => 'Gol Power 1.6 flex', 'valor' => 26000, 'cor' => 'Prata', '  placa' => 'AWL-7904'],
    "ford"      => ['veiculo' => 'Mustang V8 Turbo G', 'valor' => 120000,'cor' => 'Preto', '  placa' => 'AQO-7808'],
    "Tesla"     => ['veiculo' => 'Tesla V6 eletrico',  'valor' => 140000,'cor' => 'amarelo',' placa' => 'FLO-8799'],
    "mercedez"  => ['veiculo' => 'Mercedez-Bens SLA112','valor'=> 20000, 'cor' => 'Azul',   ' placa' => 'AWQ-8766'],
    "peugeot"   => ['veiculo' => 'Peugeout 206 1.6 flex','valor'=>12000, 'cor' => 'Dourado', 'placa' => "HGY-9877"],
 
];
/**
 * @param Criação de Array motocicletas;
 */

$motocicletas = [
    "Honda"  => ['moto'=>'CG125 Fan ESDI','valor'=>5000, 'cor'=>'branco','placa'=>'WWE-8766'],
    "Yamaha" => ['moto'=>'Yamara YBR125 Ks','valor'=>4000, 'cor'=>'Vermelho','placa'=>'GHY-7866']   
];





//instanciamento de variaveis:
$vehicles = $veiculos;
$motocycle = $motocicletas;
//estrutura do foreach
foreach($vehicles as $carros){
    echo "";
}
foreach($motocycle as $motos){
    echo "";

}



?>