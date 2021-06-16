<?php

class CustomDAO
{
    public function __construct()
    {
        global $db1;
        $this->con = $db1;
        $this->con->debug = false;
        // $this->logger = logger::getInstance();
    }

    public function begin()
    {
        $this->con->BeginTrans();
    }

    public function commit()
    {
        $this->con->CommitTrans();
    }

    public function rollback()
    {
        $this->con->RollbackTrans();
    }

    public function isInRetPagamento($documentNumber, $amount, $paymentDate)
    {

        Logger::getInstance()->write('INFO', '------------------------Pesquisando dados em BD(PAGAMENTOS). documentNumber: ' . $documentNumber . ' amount: ' . $amount . ' paymentDate: ' . $paymentDate);

        $query = 'SELECT discount_value FROM santander_confirming_pagamentos WHERE document_number = ? AND amount = ? AND payment_date = ? LIMIT 1';

        $result = $this->con->Execute($query, array($documentNumber, $amount, $paymentDate));

        if ($result->RecordCount() == 0) {
            Logger::getInstance()->write('INFO', '------------------------Pesquisa em BD (PAGAMENTOS) NAO retornou dados!');
            return false;
        }
        Logger::getInstance()->write('INFO', '------------------------Pesquisa em BD (PAGAMENTOS) retornou dados!');
        return $result->fetchRow();
    }

    public function isInRetCobranca($reference)
    {
        Logger::getInstance()->write('INFO', '------------------------Pesquisando Reference: ' . $reference . ' na tabela COBRANCA');

        $query = 'SELECT header_arquivo, header_lote, segmento_t, segmento_u, trailler_lote, trailler_arquivo FROM santander_confirming_cobrancas WHERE reference = ? LIMIT 1';

        $result = $this->con->Execute($query, array($reference));

        if ($result->RecordCount() == 0) {
            Logger::getInstance()->write('INFO', '------------------------Pesquisa em BD (COBRANCA) NAO retornou dados!');
            return false;
        }
        Logger::getInstance()->write('INFO', '------------------------Pesquisa em BD (COBRANCA) retornou dados!');
        return $result->fetchRow();
    }
}
