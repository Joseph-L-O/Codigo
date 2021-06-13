<?php
// validações de variaveis em php:


//detroi uma variavel:
//unset();
// se ela existe;
//isset();
$nome = strtoupper("Andre panizza dos santos");

unset($nome);

if(isset($nome)){
    echo " A variavel com o meu { $nome } ";

}
else{
    echo "A variavel não existe <br>";
}

exit;



?>