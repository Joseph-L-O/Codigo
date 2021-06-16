<?php
/**
 * @param crio um array associativo definindo a minha chave como um inteiro:
 * @param Nota: O PHP so consegue trabalhar com arrays associativos, clm inteiros e strings.
 * @param Qualquer outro tipo, o php tentara converter para string, ou numeros inteiros.
 */
$array = [
    1 => "a",
    '1' => 'b',
    1.5 => 'c',
    true => 'd',
    "qualquer_coisa" => "teste01"
];
/**
 * @param Passando um foreach;
 * @param para cada como foreach
 */
foreach ($array as $item){
    echo $item . "<br>";
}
?>