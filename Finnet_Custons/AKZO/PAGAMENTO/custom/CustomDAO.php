<?php

class CustomDAO   //iniciando a classe CustomDAo
{
    public function __construct() {   //Criando um metodo com Construtor  
        global $db1;                  //Enchergando a variavel Global $db1;
        $this->con = $db1;            //Buscando ao atributo setado na classe con->debug = false
        $this->con->debug = false;     
        $this->logger = logger::getInstance(); //mostrando a propriedade de logger = logger::getInstance();
    }

    public function begin() {        //Funcão begin() que passa o atributo->con->BeginTrans
        $this->con->BeginTrans();
    }

    public function commit() {        //metodo de commi, pega o atributo da classe con e seta CommitTrans
        $this->con->CommitTrans();
    }

    public function rollback() {     // Metodo RollBackTrans;
        $this->con->RollbackTrans();
    }


    public function consultaCNPJ($cnpj) {  //Metodo de consulta CNPJ:
        /*declara variavel = "SELECT" cnpj, apartir de Santander_confirming_fornecedores onde cpnj like*/

        $sql = "SELECT 
                    cnpj
                FROM
                    santander_confirming_fornecedores
                WHERE
                    cnpj like ?";

        $eSql = $this->con->Execute($sql, array(substr($cnpj, 0, 8).'%'));
        // declara a variavel $esql = pega o atributo->con->executa($sql, array(substr($cnpj, 0, 8.'%')));

         if($eSql->RecordCount() > 0) { //pega o RecordCount for maior que 0;
            return true;      //retorne verdadeiro;
         }else{
            return false;     //senão retorne false
         }
    }
     // setando o Metodo de banco de dados: insereRegistros($documentNumber, $amount, $paymentDate, $discountValue)
    public function insereRegistros($documentNumber, $amount, $paymentDate, $discountValue) {  // metodo ta passando como parametro essas variaveis.

    $sql = "INSERT INTO santander_confirming_pagamentos (document_number, amount, payment_date, discount_value) VALUES (?, ?, ?, ?)";
   //$sql = 'INSERT INTO santander_confirming_pagamentos (document_number, amount, payment_date, discount_value) VALUES (?, ?, ?, ?)"; inserir dados dentro da tabela;
    $eSql = $this->con->Execute($sql, array($documentNumber, $amount, $paymentDate, $discountValue)); 

    }
}
