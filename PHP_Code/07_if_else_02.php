<?php
/**
 * @param Exemplo com if e else
 * @param Varaveis declaradas a seguir:
 */
$idade = 15;
$numero_de_pessoas = 2;
$signo = "Libra";
echo ucwords("Voce pode entrar na festa se tiver apartir de 18 anos ou ");
echo ucwords("A partir de 16 anos acompanhado <br>");

if($idade >= 18){
    echo ucwords("Você tem a ").$idade." Você pode entrar na festa tranquilamente!! <br>";
}else{
    if($idade >= 16 && $numero_de_pessoas > 1){
        echo ucwords(" \t Voce pode entrar pois tem uma pessoa de acompanhante: " . "<br>");
        echo "<br>";
    }
        else if($idade >=15 && $numero_de_pessoas > 1 && $signo == "Libra"){
        echo ucwords("Voce tem todas as condições para entrar: <br> ") . "Signo:" . "{$signo}"."Esta acompalhado com pelo menos 1 Pessoa: <br> "."QTDE Pessoas: " . "{ $numero_de_pessoas}" . "Tem idade suficiente: <br>" . "{$idade}" . "<br>";
   }else{
   echo ucwords(" \t Você so tem a idade de: ") .$idade. " e Não pode entrar nem Fodendo!! <br> ";
   }
}
?>
