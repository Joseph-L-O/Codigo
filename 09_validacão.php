<?php
/*
*@param  Validações de Variaveis em PHP:
*/

//detroi uma variavel:
//unset();
// se ela existe;
//isset();
$nome = strtoupper("Andre panizza dos santos");

unset($nome);

if(isset($nome)){
    echo ucwords(" A variavel com o meu { $nome } ");

}
else{
    echo ucwords("A variavel não existe <br>");
}
exit;
?>
