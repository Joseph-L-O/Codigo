<?php

class Conta 
{   
    /**
     * @param  eu consigo criar um atributo static (estatico na minha Instancia);
     *  */

    private $saldo;
    private $cpftitular;
    private $nometitular;
    private static $numerodecontas;
    

    /**
     * @param Criando um construtor passando como parametro $cpfdotitular e $nomedotitular;
     */
    public function __construct(string $cpfdotitular , string $nomedotitular)
    
    { 
        /**
         * @param O construtor será iniciado com o valor de 0;
         * @param função validar nome, passando o parametro $nomedotitular;
         * @param sera obrigatorio passar o nome do titular;
         */
        $this->saldo = 0;   
        $this->cpftitular = $cpfdotitular;  
        $this->validarnome($nomedotitular); 
        $this->nometitular = $nomedotitular; 
        
        /**
         * @param para acessar o atributo statico eu utilizo o nome da classe
         * @param e não T$his-> que acessa a Instancia;
         */
        /**
     * @param Quando o construtor Iniciar ele vai adiciona o numero de contas 1 a 1 ++;
         */
         
        Conta::$numerodecontas++;

    }

    
    public function recuperarsaldo()
    {
        return $this->saldo;
    }
    /**
     * @param Metodo recuperar Cpf;
     */
    public function recuperarcpf()
    {
        return $this->cpftitular;
    }
    /**
     * @param Metodo exibir Nome do Titular;
     */
    public function recuperarnome()
    {
        return $this->nometitular;
    }
    /**
     * @param Metodo de Sacar o valor da conta;
     */
    public function sacar(float $valorAsacar)
    {
        if($valorAsacar > $this->saldo)
        {
            echo "Não e Possivel fazer o saque";
            return;
        }
        $valorAsacar -= $this->saldo;
    }
    /**
     * @param Metodo de Depositar Valores na conta;
     */
    public function depositar(float $deposito)
    {
        if($deposito < 0)
        {
            echo "O Numero precisa ser Positivo";
            return;
        }
        $deposito +=$this->saldo;
    }
    /**
     * @param Metodo de transferir valores entre contas;
     */
    public function transferir(float $valorAtransferir , Conta $contaDestino)
    {
        if($valorAtransferir > $this->saldo)
        {
            echo "O valor a transferir e maior que o saldo na conta!";
            return;
        }
        $this->sacar($valorAtransferir);
        $contaDestino = $this->depositar($valorAtransferir);
        /**
         *@param A conta destino vai receber o metodo depositar e vai setar no valorAtransferir;  
         */
        
    }
    public function validarnome($nomedotitular)
    {
        if(strlen($nomedotitular) < 5)
        {
            echo "O valor que você escreveu e menor que 5";
            exit();
        }

    }
    /**
     *@param agora vou criar um metodo estatico para acessar o numero de contas: 
     */
    
    public static function recoverContas(): int 
    {
        return Conta::$numerodecontas;

    }
    

}

/**
 * @param Inicio do codigo HTML;
 * 
 *   */   
?> 
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Imutabilidade em PHP</title>
    <meta charset="utf-8">
    <style>
    *{
        background-color:white;
        text-decoration:none;
        font-size:12px;
        margin:0;
    }
    h1 {
        text-align:center;
        color:red;
        bold:2px;
    }
    #text {
        color:blue;
        font-size:16px;
        shadow:3px;
        text-align:left;
        font-family:arial, Lucida, Sans-Serif;        
    }
    </style>
    <script>
    </script>
    </head>
  <body>
  <h1> Imutabilidade em PHP </h1>
  <hr>
  <br>
  <!-- aqui vai meu resultado -->
  <header></header>

  <main>
    
  <p #id="text1"> O saldo que possuo na conta e de:
  <?php   
          $primeiraconta = new Conta("123.456.789.99" , "Andre Panizza dos Santos");
          $primeiraconta->depositar(1000);
          echo $primeiraconta->recuperarsaldo();  ?><br></p>
  <br>
  <p> O Cpf do titular e de Numero:<?php echo $primeiraconta->recuperarcpf();?></p>
  <br>
  <p> O Nome do Titular do Cartão e: <?php echo $primeiraconta->recuperarnome();?></p>
  <br>
  <p>Da minha classe Contas, Qual o numero de Contas: <?php echo Conta::recoverContas(); ?></p>
  <br>
  </main>
  <footer></footer>
  </body>
</html>
