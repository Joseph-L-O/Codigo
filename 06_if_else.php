<?php
/**
 * @param cif e else basicos no codigo
 */
$idade = 16;

echo "<br>";

if($idade >= 16){
    echo "Voce tem ".$idade." anos ".PHP_EOL;
    echo "Pode Entrar sozinho";
}

else if($idade >= 18){
    echo "Você so tem ".$idade." anos. Você não pode entrar sozinho \n";
    echo "<br>";
}
else{
    echo "Voce não pode entrar na Balada <br>";
    echo "\n Adeus ";

}



?>