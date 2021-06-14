<?php
/**
 * @param Criando uma classe endereço
 * @param Complementando a classe Conta;
 * @param Criação da Classes;
 */
class endereco 
{
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;

    
public function __Construct(string $cidade, string $bairro , string $rua , string $numero)
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

class Conta{
    private $saldo;
    private $cpfTitular;
    private $nomeTitular;
    public static $numerodecontas;

    public function __Construct(string $cpfdoTitular, string $nomedoTitular)
    {
        $this->saldo = 0;
        $this->cpfTitular = $cpfdoTitular;
        self::validanome($nomedoTitular);
        $this->nomeTitular = $nomedoTitular;
        $this->numerodecontas++;

    }
    /**
     * @param Metodos da classe conta:
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
        public function transferir():string
        
    }




    public static function validarnome(string $nomedoTitular):string
    {
        if(strlen($nomedoTitular) < 5)
        {
             throw New Exception("o nome deve ter mais que 05 caracteres");
        }
        else{
            exit();
        }
    }
}
