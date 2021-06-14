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
