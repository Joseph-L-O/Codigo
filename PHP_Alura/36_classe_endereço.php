<?php
/**
 * @author  Andre Panizza dos santos <https://github.com/andredeveloperPHP>
 * @version 0.0.-1;
 */
class Conta
{
/**
 * criação dos atributos
 * @access private
 */
    private $saldo;
    private $cpfTitular;
    private $nomeTitular;
/**
 * @internal Construtor, que obriga a declaração das informações
 */
    public function __Construct(string $cpfdotitular, string $nomedotitular)
    {
        $this->saldo = 0;
        $this->cpfTiTular = $cpfdotitular;
        $this->nomeTitular = $nomedotitular;
    }
/**
 * @method criação dos Metodos somente de retorno de valores;
 */
    public function getSaldo(): float
    {
        return $this->saldo;
    }
    public function getcpfTitular(): string
    {
        return $this->cpfTiTular;
    }
    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }
/**
 * @method criação dos metodos com parametro e retorno:
 * efetua o saque na conta
 * @param float $valor - valor que irá ser sacado!
 * @return bool informa se o saque foi efetuado com sucesso.
 */


public function Sacar(float $valor):float
    {
      try{
          if($valor <= 0)
          {
              throw new Exception("O Valor do saque deve ser positivo!");

          }else if($valor > $this->saque){
              throw new Exception("Você não possui saque suficiente para efetuar o saque");
          }
          $this->saldo -= $valor;
          return true; 
        }catch(Exception $e){
            echo $e->getMessage();
        }return false;
    }

    public function Depositar(float $deposito):float
    {

    try {
        if($deposito < 0){
            throw new Exception("O valor não pode ser negativo");
        }else if($deposito == 0)
            {
            throw new Exception("O valor não pode ser Zerado pra deposito");
            }
        $deposito += $this->saldo;
        return true;
        }catch(Exception $e){
            echo $e->getMessage();
        }return false;

} //fim do metodo.

} // fim da classe




