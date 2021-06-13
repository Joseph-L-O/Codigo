<?php
/*
*@param setando classe Conta:
*#param adicionando os metodos
*/
class Conta {
  private $saldo;
  private $cpfTitular;
  private $nomeTitular;
  public static $numerodecontas;
   
  /*
  *@param adicionando o construtor;
  */
  public function __construct(string $cpfdoTitular, string $nomedoTitular)
  {
    $this->saldo = 0;
    $this->cpfTitular = $cpfdoTitular;
    self::validarnome($nomedoTitular);
    $this->nomeTitular = $nomedoTitular;
    $this->numerodecontas++;
  }
  /*
  *@param setando todos os Metodos:
  */
  public function sacar(float $valorAsacar)
  {
    if($this->saldo > $valorAsacar)
    {
      throw new Exception("Não e Possivel sacar o valor",1);
    }//parei aqui.
  }
  
  
}
/*
*@param setando uma classe nova Endereco, com os respectivos atributos;
*@param atribuindo valores atribuição;
*/
class Endereco {
  private $cidade;
  private $bairro;
  private $rua;
  private $numero;
  /*
  *@param setando um construtor para inicialização;
  */  
  public function __construct(string $cidade , string $bairro , string $rua , string $numero){
    $this->cidade = $cidade;
    $this->bairro = $bairro;
    $this->rua = $rua;
    $this->numero = $numero;
  }
  public function recuperacidade():string
  {
    return $this->cidade;
  }
  public function recuperabairro():string
  {
    return $this->bairro;
  }
  public function recuperarua():string
  {
    return $this->rua;
  }
  public function recuperarnumero():string
  {
    return $this->numero;
  }
  
}


?>
