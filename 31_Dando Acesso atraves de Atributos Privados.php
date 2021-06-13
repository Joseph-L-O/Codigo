<?php
/**
 * @param Iniciando o Metodo com saldo Zerado;
 */
class Conta{
    protected $saldo = 0;
    protected $cpfTitular;
    protected $nomeTitular;

    /**
     * @param Utilizando o Metodo Sacar Valores
     */
    public function sacar(float $valorAsacar): void 
    {
        if($valorAsacar > $this->saldo)
        {
            echo "Não e possivel sacar esse valor! <br>";
            return;
       }
        $this->saldo -= $valorAsacar;
    }
    /**
     * @param Utilizando o Metodo de Depositar valores na conta;
     */

    public function depositar($deposito)
    {
        if($deposito < 0)
        {
            echo "Entre com um numero positivo";
            return;
        }
        $this->saldo += $deposito;
    }
    //metodo trasferir 
    public function  transferir(float $valorAtransferir, Conta $contadestino): void
    {
        if($valorAtransferir > $this->saldo)
        {
            echo "Saldo Indisponivel";
            return;

        }
        $this->sacar($valorAtransferir);
        $contadestino->depositar($valorAtransferir);
    }

    public function consultar()
    {
        return $this->saldo;
    }

    public function definirnome(string $nome): void
    {
        $this->nomeTitular = $nome;
    }

    public function definircpf(string $cpf): void
    {
        $this->cpfTitular = $cpf;

    }
    public function exibirnome():string 
    {
        return $this->nomeTitular;

    }
    public function exibircpf():string 
    {

        return $this->cpfTitular;
    }

    public static function andre(){

    }
  /**
   * @param Fim da Classe;
   */
} 


/**
 * @param criar uma função de execução;
 */

function executar(){
$segundaconta = new Conta;
$primeiraconta = new Conta;
$primeiraconta->depositar(1000);
echo $primeiraconta->consultar()."<br>";
$primeiraconta->definirnome("Andre Panizza dos Santos");
echo $primeiraconta->exibirnome()."<br>";
$primeiraconta->definircpf("123.456.789.10");
echo $primeiraconta->exibircpf()."<br>";
}



?>