<?php
/**
 * @param Uma lista de dados, normalmente e do tipo complexa:
 * @param Um array pode ser definido de duas formas: 
 * @param É temos varios tipos de dados, como string, float, inteiros;
 * @param tenho aqui uma lista de inteiros;
 * 
 */
$idadeList = [12,45,23,26,29,67,14];//
$idadeCont = array(2.1,4.8,9.8,1.3,1.7);
/**
 * @param Principal caracteristica de um vetor e que ele possui indices, manualmente numerados:
 * @param O valor dentro do array começam com o numero 0.
 * @param Valores:
 */
$idade_primeira = $idadeList[0];
$idade_segunda = $idadeList[1];
$idade_terceira = $idadeList[2];
echo "Valor do array indice [0]: "." ". $idade_primeira;
echo "Valor do array indice [1]: "." ". $idade_segunda;    
echo "Valor do array indice [2]: "." ". $idade_terceira;  
?>