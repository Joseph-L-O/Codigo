<?php
/**
 * @param Utilizando throw New Exeception;
 */

class Conta
{
    private $saldo = 0;
    public function depositar(float $valor)
    {
        if($valor < 0)
        {
            Throw new Exception('valor Informado invalido');
            return;
        }
        $this->saldo += $valor;
    }
    public function sacar(float $valor)
    {
        if($valor < 0)
        {
            throw new Exception('Valor informado Invalido!.');

        }else if($valor > $this->saldo){
            throw new Exception('Valor do saque, Menor que o saldo da Conta');
        }
        $this->saldo += $valor;
    }
    public function consultasaldo(): float 
    {
        return $this->saldo;
    }
    public function transferir(float $valor, Conta $contadestino)
    {
        if($valor < 0){
            throw new Exception('Valor informado invalido');
        }else if($valor > $this->saldo){
            throw new Exception('O valor e maior que o Saldo');
        }
        $contadestino->depositar($valor);
        $this->saldo -= $valor;
    }
}
?>
