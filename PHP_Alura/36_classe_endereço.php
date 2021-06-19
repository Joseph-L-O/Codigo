<?php
/**
 * @param criando a classe Conta:
 */

class Conta {
    //atributos:
    private $saldo;
    private $nomeTitular;
    private $cpfnumero;
/**
 * @var inicializando um construtor:
 */
public function __construct(string $nomedoTitular, string $cpfdoTitular) {
    $this->saldo = 0;
    $this->nomeTitular = $nomedoTitular;
    $this->cpfnumero = $cpfdoTitular;
}

/**
 * @method Metodo de recuperação de saldo:
 */
public function getSaldo():float 
{
    return $this->saldo;
}
/**
 *@method Metodo de recuperação de CPF: 
 */
public function getCPF():string 
{
    return $this->cpfnumero;
}
/**
 * @method mtodo de recuperação do Nome:
 */
public function getNome():string 
{
    return $this->nomeTitular;
}
/**
 * @param Iniciando o Metodo de Sacar e Depositar valores:
 */
public function setSacar($valorAsacar):float
{
    if($valorAsacar > $this->saldo)
    {
        throw New Exception("Não e possivel Sacar este valor!",48);
    }else if($valorAsacar == 0){
        throw New Exception("O valor a Sacar Precisa ser Positivo!",50);
    }
    
    try{                                //tente fazer tal coisa. se caso não acontecer
        $valorAsacar -= $this->saldo;
    }catch(Exception $e){                // exiba uma mensagem na tela
        echo 'Exceção capturada',$e->getMessage(),PHP_EOL;
        echo 'Exceção Capturada',$e->getLine(),PHP_EOL;
    }
   
} 

}//fim classe Conta


/**
 * @param criando a classe Endereco
 * @param setando os atributos da classe
 */
class Endereco{

}

?>