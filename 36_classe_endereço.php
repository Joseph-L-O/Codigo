<?php
/**
 * @param primeiro vou criar a classe conta;
 * @param atributos setados
 */

 class Conta{
   private $saldo;
   private $cpfTitular;
   private $nomeTitular;
   public static $numerodecontas;

   public function __Construct(float $saldoconta, string $cpfdoTitular, string $nomedoTitular)
   {
       $this->saldo = $saldoconta;
       $this->cpfTitular = $cpfdoTitular;
       $this->nomeTitular = $nomedoTitular;
       
       Conta::$numerodecontas++;
   }
   public function recuperarsaldo():float
   {
       return $this->saldo;
   }
   public function recuperarnome():string 
   {
       return $this->nomeTitular;
   }
   public function recuperarcpf():string 
   {
       return $this->cpfTitular;
   }
   public function sacar(float $valor)
   {
       if($valor > $this->saldo)
       {
           throw New Exception("Não e Possivel sacar o valor!");
       }
       else if($valor == 0)
       {
           throw New Exception("Não e Possivel sacar valor Zerado!!");
       }
       else {
           $valor -= $this->saldo;
       }
   }
   public function depositar(float $deposito)
   {
       if($deposito < 0)
       {
           throw New Exception("O valor não pode ser Negativo!");
       }
       else if($deposito == 0)
       {
           throw New Exception("O valor não pode ser Zero");
       }
       else{
           $this->saldo += $deposito;
       }
   }
   public function transferir(float $valor, Conta $ContaDestino)
   {
       if($valor > $this->saldo)
       {
           throw New Exception("Não e Possivel Transferir o valor");
       }
       else if($valor == 0)
       {
           throw New Exception("O valor da transferencia não pode ser igual a: 0");
       }
       else{
           $this->sacar = $valor;
           $ContaDestino->depositar($ContaDestino);
       }
   }

}

 class Endereco 
{
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;

    public function __Construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua    = $rua;
        $this->numero = $numero;
    }

    public function recuperarcidade():string 
    {
        return $this->cidade;
    }
    public function recuperarbairro():string 
    {
        return $this->bairro;
    }
    public function recuperarrua():string 
    {
        return $this->rua;
    }
    public function recuperarnumero():string 
    {
        return $this->numero;
    }
}

/**
 * @param Instanciando classe
 */

 $primeiraconta = new Conta("100", "237.216.498.78", "Andre Panizza dos Santos");
 echo ucwords("O saldo da conta R$:  ").$primeiraconta->recuperarsaldo()."<br>";
 echo ucwords("Nome do Titular da Conta: ").$primeiraconta->recuperarnome()."<br>";
 echo ucwords("Numero do CPF do Titular: ").$primeiraconta->recuperarcpf()."<br>";
 echo "<hr>";
 
 

?>