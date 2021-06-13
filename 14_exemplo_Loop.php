<?php
/**
 * @param Exemplo de um laço de repetição
 */

function Lista(){
    //Lista de array:
    $Notas = [6.0, 5.0, 7.0, 4.6, 5.9, 7.7];
    $Nomes_Alunos = ["Andre", "Stephanie", "Roseli", "Alcides","Aurea", "toto"];
    $frase = ucfirst("Você foi Aprovado!!  <br>");
    /**
     *@param Exemplo de Loop usando o laço for
     */
         
    for($i = 0; $i < count($Notas); $i++){
        echo "<br>".$Notas[$i] . $Nomes_Alunos[$x];
    }

}
/**
 * @param exibindo o valor do array;
 */
echo Lista() . "<br>";


?>