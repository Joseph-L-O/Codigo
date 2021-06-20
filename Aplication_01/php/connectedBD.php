<?php

/**
 * @var Definindo as variaveis de conexão com o banco de dados
 */
$host = 'localhost';
$root = 'root';
$senha = '';
$bd = 'bd_banco_andre';  // a criar o banco de dados PHPmyadmin


$mysqli = new mysqli($host, $root, $senha, $bd);

if($mysqli->connect_errno)
    echo "Erro na Conexão com o Banco de dados" . "( " . $mysqli->connect_errno . ") " . $mysqli->connect_error.PHP_EOL;
?>