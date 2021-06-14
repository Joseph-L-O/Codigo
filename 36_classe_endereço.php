<?php
/**
 * @param Criação das classes Conta, e Endereco;
 * @param Validar nome e um metodo statico
 * @param $numerodecontase um atributo Estatico;
 */
class Conta {
  private $saldo;
  private $cpfTitular;
  private $nomeTitular;
  public static $numerodecontas;
   
  /**
   * @param Adicionando um Construtor();
   * @param inicializando o Construtor;
   */
  public function __construct(string $cpfdoTitular, string $nomedoTitular)
  {
    $this->saldo = 0;
    $this->cpfTitular = $cpfdoTitular;
    self::validarnome($nomedoTitular);
    $this->nomeTitular = $nomedoTitular;
    $this->numerodecontas++;
  }


  /**
   * @param Setando todos os Metodos
   */
  public function recuperasaldo():float
    {
        return $this->saldo;
    }
    public function recuperacpf():float 
    {
        return $this->cpfTitular;
    }
    public function recuperanome():float 
    {
        return $this->nomeTitular;
    }
    public function sacar(float $valorAsacar):float 
    {
        if($valorAsacar > $this->saldo)
        {
            throw New Exception("Não e Possivel Sacar o valor!!");
        }else if($valorAsacar == 0)
        {
            throw New Exception("O valor a Sacar não pode ser o Numero 0");
        }else{
            $valorAsacar -=$this->saldo;
        }
    }
    public function depositar(float $deposito):float 
    {
        if($deposito == 0)
        {
            throw New Exception("O deposito Precisa possuir um valor e não podera ser zero!!");

        }else if($deposito < 0 )
        {
            throw New Exception("O Numero Preisa ser Positivo!!");

        }else{
            $deposito += $this->saldo;
        }
    }
        public function transferir(float $valor, Conta $contaDestino)
    {
        if($valor > $this->saldo)
        {
            throw New Exception("Não e Possivel transferir o Valor");

        }else{
            $this->sacar($valor);
            $contaDestino = $this->depositar($contaDestino);
        }
    }
    public static function validarnome(string $nomedoTitular):string
    {
        if(strlen($nomedoTitular) < 5)
        {
             throw New Exception("o nome deve ter mais que 05 caracteres");
        }else{
            exit();
        }
    }
}    

/**
 *@param Setando uma Nova Classe
 */
class Endereco {
  private $cidade;
  private $bairro;
  private $rua;
  private $numero;
  /**
   * @param Construtor Inicializado;
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
