<?php
/**
 * @param Exemplo de caso com switch */ 

// variaveis:
    $coisas = 2;
 class meu_exemplo {

    function caso(){
        global $coisas;
    switch($coisas){
        case 1;
        echo ucwords("O valor da variavel retorna 01 <br>");
        break;
        case 2;
        echo ucfirst("o valor da varivel sera 02 ou retornara 02 <br>");
        break;
        case 3;
        echo strtoupper("O valor sera O numero 03 <br>");
        break;
        case 4;
        echo strtolower("Esse texto ira aparecer em caixa baixa <br>");
        break;

        default:
        echo ucwords("Nenhuma das opções e Valida, por favor revise suas opções \n");
        break;
    }
}


}
echo ucwords(" Estou chamando a minha Função de Switch: <br>");
echo "<br>";
echo caso();
echo "<br>";

?>
