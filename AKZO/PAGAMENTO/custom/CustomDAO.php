<?php

class CustomDAO
{
    public function __construct() {
        global $db1;
        $this->con = $db1;
        $this->con->debug = false;
        $this->logger = logger::getInstance();
    }

    public function begin() {
        $this->con->BeginTrans();
    }

    public function commit() {
        $this->con->CommitTrans();
    }

    public function rollback() {
        $this->con->RollbackTrans();
    }


    public function consultaCNPJ($cnpj) {

        $sql = "SELECT 
                    cnpj
                FROM
                    santander_confirming_fornecedores
                WHERE
                    cnpj like ?";

        $eSql = $this->con->Execute($sql, array(substr($cnpj, 0, 8).'%'));

         if($eSql->RecordCount() > 0) {
            return true;
         }else{
            return false;
         }
    }

    public function insereRegistros($documentNumber, $amount, $paymentDate, $discountValue) {

    $sql = "INSERT INTO santander_confirming_pagamentos (document_number, amount, payment_date, discount_value) VALUES (?, ?, ?, ?)";

    $eSql = $this->con->Execute($sql, array($documentNumber, $amount, $paymentDate, $discountValue));

    }
}
