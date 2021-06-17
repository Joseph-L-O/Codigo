<?php
//criando a conexão:
$host = 'localhost';
$root = 'root';
$senha = '';
$bd = 'data_bank';

//função construtora passando as variaveis
$mysqli = new mysqli($host, $root, $senha, $bd);
/**
 * @param 1° validar se essa conexão teve erro
 * @param 2° Se tiver um erro, mostra a mensagem falha de conexão, e descreve o erro o que aconteceu Line 16;
 */
if($mysqli->connect_errno)
echo "falha na conexão: (". $mysqli->connect_errno.") ".$mysqli->connect_errno;





?>