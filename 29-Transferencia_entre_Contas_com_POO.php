<?php
   

   class Conta 
   {
       /**
        * @param Criando Classe com atributos do tipo Public
        * @param Criando o Metodo Sacar e Retornando o valor 
        */
       public $saldo = 0;
       public $cpfTitular;
       public $nomeTitular;
       
       //criando  o metodo sacar:
       public function sacar(float $valorAsacar)
       {
           if($valorAsacar > $this->saldo)
           {
               echo "Você não pode sacar este valor <br>";
               return;    
           }
               $this->saldo -= $valorAsacar;
           
       }


       /**
        * @param Criando o Metodo Depositar Valor retornando Vazio;
        */
       public function depositar( float $deposito): void
       {
           if($deposito < 0)
           {
               echo "O deposito deve ser positivo";
               return;  
               /**
                * @param tirando o else e colocando um return aumenta a Legibilidade do codigo;
                */
           }
           $this->saldo += $deposito;
       }


       /**
        *@param criando o metodo transferir conta; 
        */
       
       public function transferir(float $valorAtransferir , float $transferirvalores): void
       {
           if($transferirvalores > $this->saldo)
            {
               echo "Não e possivel transferir o valor";
               return;
               /**
                * @param tirando o else e colocando um return aumenta a Legibilidade do codigo;
                 */                             
            }
            $this->sacar($valorAtransferir);
            $this->depositar($transferirvalores);
        }
   }

   /**
    * @param Instanciado e adicionando os Metodos;
    */

   $primeiraconta = new Conta;
   $primeiraconta->depositar(500);
   $segundaconta = new Conta; 
   $primeiraconta->transferir(500 , $segundaconta); 
   echo "Saldo da conta 01:". $primeiraconta->saldo . "<br>";
   echo "<br>";
   echo "Saldo da conta 02:" . $segundaconta . "<br>";

?>


