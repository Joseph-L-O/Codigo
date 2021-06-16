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
    
    public function recuperarCidade():string 
    {
        return $this->cidade;
    }
    
    public function recuperarBairro():string 
    {
        return $this->bairro;
    }
   
    public function recuperarRua():string 
    {
        return $this->rua;
    }
    
    public function recuperarNumero():string 
    {
        return $this->numero;
    }
}

class Conta{
    private $saldo;
    private $cpfTitular;
    private $nomeTitular;
    public static $numerodeCcontas;

    public function __Construct(string $cpfdoTitular, string $nomedoTitular)
    {
        $this->saldo = 0;
        $this->cpfTitular = $cpfdoTitular;
        self::validaNome($nomedoTitular);
        $this->nomeTitular = $nomedoTitular;
        $this->numerodeContas++;

    }
    /**
     *@param Metodos da classe conta:
     */

    public function recuperaSaldo():float
    {
        return $this->saldo;
    }
    public function recuperaCpf():float 
    {
        return $this->cpfTitular;
    }
    public function recuperaNome():float 
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
    public function Depositar(float $deposito):float 
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
    public static function validarNome(string $nomedoTitular):string
    {
        if(strlen($nomedoTitular) < 5)
        {
             throw New Exception("o nome deve ter mais que 05 caracteres");
        }else{
            exit();
        }
    }
}
