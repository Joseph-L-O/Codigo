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
                    santander_confirming_ancoras
                WHERE
                    cnpj like ?";

        $eSql = $this->con->Execute($sql, array(substr($cnpj, 0, -6) .'%'));

         if($eSql->RecordCount() > 0) {
            return true;
         }else{
            return false;
         }
    }
    public function insereRegistros($reference, $headerArquivo, $headerLote, $segmentoT, $segmentoU, $traillerLote, $traillerArquivo) {

    $sql = "INSERT INTO santander_confirming_cobrancas (reference, header_arquivo, header_lote, segmento_t, segmento_u, trailler_lote, trailler_arquivo) VALUES (?, ?, ?, ?, ?, ?, ?)";

    $eSql = $this->con->Execute($sql, array($reference, $headerArquivo, $headerLote, $segmentoT, $segmentoU, $traillerLote, $traillerArquivo));

    }
}
