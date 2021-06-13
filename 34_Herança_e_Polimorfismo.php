<?php
/**
 * @param Criando uma classe endereço
 * @param Complementando a classe Conta;
 * @param Criação da Classes;
 */
class endereco 
// Classe Endereco:

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

/**
 * @param Criando a Classe Conta para acessar os Metodos
 */
}

class Conta
{
    private $saldo;
    private $cpfTitular;
    private $nomeTitular;
    private static $numerodecontas;
    
    
    public function __Construct(string $cpfdoTitular, string $nomedoTitular)
    {
        $this->$saldo = 0;
        $this->cpfTitular = $cpfdoTitular;
        self::validarnome($nomedoTitular);
        $this->nomeTitular = $nomedoTitular;
        $this->numerodecontas++;


    }
     /**
      * @param Metodo Recuperar Saldo;
      */
    public function recuperarsaldo() 
    {
        return $this->saldo;
    }
    /**
     * @param Metodo Recuperar o Nome 
     */
    public function recuperarnome() 
    {
        return $this->nomeTitular;
    }
    /**
     * @param Metodo recuperar o CPF do Titular
     */
    public function recuperarcpf()  
    {
        return $this->cpftitular;
    }
    /**
     * @param Metodo sacar valor da Conta;
     */
    public function sacar(float $valorAsacar)    
    {
        if($valorAsacar > $this->saldo) 
        {
            throw new Exception("Não e Possivel Sacar este valor", 1);
        }else{
            $this->saldo -= $valorAsacar;
        }       
    }
    /**
     * @param Metodo de Depositar Valor;
     */
    public function depositar(float $deposito)
    {
        if($deposito < 0)
        {
            throw new Exception("O valor deve ser Positivo pra Deposito");
        }else{
            $deposito += $this->saldo;
        }

    }
     /**
      *@param Metodo de Transferir Valor;
      */
    public function transferir(float $valor , Conta $ContaDestino)
    {
        if($valor > $this->saldo)
        {
            throw new Exception("Valor indisponivel");
        }else{
            $this->sacar($valor);
            $ContaDestino = $this->depositar($ContaDestino);
        }
    }
    public static function validarNome(string $nomedoTitular)
    {
        if(strlen($nomedoTitular) < 5)
        {
            throw new Exception("Insira pelo menos mais de cinco caracteres", 1);
        }else{
            exit();
                    
              
        }
    }
                  
}


/**
     *Conceito de Interface: 
     * -> exemplo: quando uma classe implementa a interface:
     */

     /*
interface Conta1{
    public function depositar2(float $valor, Conta $conta);
    public function sacar2(float $valor);
       
}

class Contacorrente implements Conta1 {


}
class ContaPoupança implements Conta1{

}

class CaixaEle {
    public function sacar($valor, Conta1 $conta)
    {
        $conta->sacar2($valor);

    }
}
*/
    





