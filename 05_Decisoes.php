<?php
/**
 * @param comando de decisão com PHP..
 */
$idade = 21;
$nome = "Andre Santos";

echo ucwords("Você pode entrar caso você tenha 18 anos? <br>");
echo "<br>";
echo "você tem ".$idade."anos. Pode entrar <br>";
echo "<br>";
if($idade >= 22 or $nome == 'Andre'){
    echo "Você pode entrar na festa <br>";
    echo "<br>";
}
else{
    echo "Você não pode entrar na Festa <br>";
    echo "<br>";
}
if($idade == 18 or $idade === 18){
    echo "Você com certeza pode entrar na festa okay mano <br>";
    echo "<br>";
}
else if($idade <= 18 || $idade >= 20){
    echo "Voce e intermediario, possui pelo menos 20 anos e podera entrar na festa hoje";
    echo "<br>";
}
else{
    echo "Você esta Permanentemente proibido de entrar na festa certo <br>";
    echo "<br>";
}
?> 
