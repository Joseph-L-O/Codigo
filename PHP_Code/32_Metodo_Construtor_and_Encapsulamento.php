<?php
//Metodo Construtor e encapsulamento:
class Conta{
    private $saldo;
    private $cpfTitular;
    private $nomeTitular;

    /**
     *@param toda vez que uma nova instancia e criada, e exibido esta mensagem;
     *@param porem podemos passar o saldo = 0 toda vez que e criada uma nova instancia de classe;
     *@param preciso que o metodo construtor receba os parametros do $cpfTitular,$nomeTitular
     */
        
    public function __construct(string $cpfTitular, string $nomeTitular) 
    {
        /**
         * @param Preciso passar que o $cpfTitular da minha instancia, seja passado para o Parametro que defini no construtor;
         * @param com isso estou inicializando os atributos com os parametros passados pelo construtor;
         */
        $this->cpfTitular = $cpfTitular;
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;
        
    }
    /**
     * @param Criação do Metodo Sacar;
     */
    public function sacar(float $valorAsacar):void 
    {
        if($valorAsacar > $this->saldo)
        {
            echo ucwords("<b> Não e Possivel sacar este Valor!!</b>");
            return;
        }
        $this->saldo -= $valorAsacar;
    }

    /**
     * @param Metodo Depositar Valor com retorno com void vazio;
     */

    public function depositar(float $deposito):void
    {
        if($deposito < 0)
        {
            echo ucwords("O valor do Deposito deve ser Positivo");
            return;

        }
        $deposito += $this->saldo;
    }

    /**
     * @param Metodo de Trasferencia de Valores;
     */
    public function transferir(float $valorAtransferir, Conta $contaDestino):void
    {
        if($valorAtransferir > $this->saldo)
        {
            echo ucwords("Não e possivel fazer a Transferencia");
            return;
        }
        $this->sacar($valorAtransferir);
        $this->depositar($contaDestino);
    }
    public function recuperarsaldo():float
    {
        return $this->saldo;

    }

    /**
     * @param Metodo de recuperação de Nome;
     */
    public function recuperanome():string 
    {
        return $this->nomeTitular;
    }

    /**
     * @param Metodo de recuperar Cpf com retorno de string;
     */
    public function recuperarcpf():string 
    {
        return $this->cpfTitular;
    }
}

    /**
     * @param Inicio do Codigo HTML:
     */
   
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Teste de Pagina </title>
    <meta charset="utf-8">
    <style>
    * {
        backgroundcolor:white;
        text-decoration:none;
        margin:none;
        text-align:12px;
    }
    h1 {
        text-align:center;
        bold:2px;
        color:red;
    }
   </style>
   <script>
   </script>
  </head>
  <body>

  <!-- testando a pagina em um arquivo HTML com Formatação -->

  <h1> Teste de Pagina </h1>

  <p>Aqui vai o codigo PHP<br></p>
  <?php
   $primeiraconta = new Conta('234.456.789.10', 'Andre Panizza dos Santos'); 
   /**
    *@param quando eu criar o objeto eu tenho que passar os valores dos atributos;
    */
     
   echo ucwords("<b> Cpf do Titular N°: </b>") . $primeiraconta->recuperarcpf() . "<br>";
   echo ucwords("<b> Nome do Titular: </b>") . $primeiraconta->recuperanome() . "<br>";
   echo ucwords("<b> Saldo Atual da Conta do Titular: </b>") . $primeiraconta->recuperarsaldo()."<br>";
   echo "<br>";
   ?>
   <!-- final da exibição -->
</body>
</html>