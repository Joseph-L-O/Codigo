<?php
/**
 * @param exibindo array de lista
 */
$idadeList = [12, 34, 32, 14, 15, 17, 27];
$quebrados = [1.2, 3.4, 6.5, 9.0, 7.8, 8.2];
$textos = ["andre", "Onichan", "Arcanjo", "Gringo", "Pato"];

echo "# A valor e:".$idadeList[6]."<br>". " # Dinheiro e: " .$quebrados[4] ."<br>"."# Os nomes são: ".$textos[3]."<br>";
echo "<br>";
echo ucwords("O tipo do da variavel e: ") . gettype($idadeList) . "<br>";
echo "<br>";
/**
 * @param Note que a Função count, ela faz a conta um array ou uma lista mostrando seu tamanho;
 * @param utilizando o for para gerar um contador e repetir
 * @param 1- indice começa com 0;
 * @param enquanto i for menor que 7 exiba uma mensagem
 * @param então incremente e repita a operação, até que a condição seja satisfeita:
 */
$gatos = [12,32,54,56,76]; 
$idadeList = [15, 14, 14, 50];
$idadenome = ["Andre","Pato","Arcanjo","Onichan"];
// $i = contador;
function laco(){
    global $idadeList;
    global $idadenome;

for($i = 0; $i < count($idadeList); $i++){
    echo "<br>";
    echo ucfirst("Meu nome completo e:  ") . $idadenome[$i] . "<br>";
    continue;
    echo "<br>";
    echo "fim da frase";
    echo "<br>";
    echo $idadeList['titulo'];

      }
}
echo "# 1" . strtoupper(" <br> Esse e o resultado da minha lista: <br>");
echo laco();

?>