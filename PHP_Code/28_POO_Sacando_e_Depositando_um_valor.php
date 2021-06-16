<?php
/**
 * @param Criando uma Classe;
 */
class Conta {
    public $saldo = 0; 
    public $cpfTitular; 
    public $nomeTitular; 
    
public function sacar(float $valorAsacar)
{
    if($valorAsacar > $this->saldo) {
        echo "Não e possivel sacar esse valor ";
    }else{
        $this->saldo -= $valorAsacar;
    }
  }  
  
  function depositar(float $deposito): void
{
    if($deposito < 0){
        echo "O saldo precisa ser Positivo!";
    }else{
        $this->saldo += $deposito;
    }
}

}

$primeiraconta = new Conta;
$primeiraconta->saldo = 1000;
$primeiraconta->cpfTitular = "123.456.789.76";
$primeiraconta->nomeTitular = "Brito";

$primeiraconta->sacar(500);
$primeiraconta->depositar(100);
/**
 * @param Exibindo os valores com Var_dump();
 */
var_dump($primeiraconta)."<br>";
echo "<br>";

?>