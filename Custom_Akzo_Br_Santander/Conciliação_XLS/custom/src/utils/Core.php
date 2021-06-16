<?php

require_once 'CustomDAO.php';

class Core
{
    const CONCILIADO = true;
    public static function exec($sheetPlainData)
    {
        $dao = new CustomDAO();
        $arquivosGerados = new stdClass();
        $arquivosGerados->naoConciliados = null;
        $arquivosGerados->conciliados = null;
        $arquivosGerados->headerArquivo = '';
        $arquivosGerados->trailerArquivo = '';

        foreach ($sheetPlainData as $row) {
            if (implode('', $row) == '') {
                break;
            }

            Logger::getInstance()->write('INFO', '#############################');

            $rowValues = self::extractValues($row);

            $respPesquisaPagfor = $dao->isInRetPagamento($rowValues->documentNumber, $rowValues->amount, $rowValues->paymentDate);

            if ($respPesquisaPagfor == self::CONCILIADO) {
                $discountValue = $respPesquisaPagfor['discount_value'];
                $respPesquisaCobranca = $dao->isInRetCobranca($rowValues->reference);

                if ($respPesquisaCobranca == self::CONCILIADO) {
                    $arquivosGerados->headerArquivo = $respPesquisaCobranca['header_arquivo'] . "\r\n";
                    $arquivosGerados->trailerArquivo = $respPesquisaCobranca['trailler_arquivo'] . "\r\n";

                    $lote = self::makeLote($respPesquisaCobranca, $discountValue);
                    $arquivosGerados->conciliados .= $lote;
                } else {
                    $arquivosGerados->naoConciliados .= $row[1] . ';' . $row[7] . ';' . DateTime::createFromFormat('n/j/Y', $row[14])->format('d/m/Y') . ';' . 'NAO CONCILIADO CONTAS A RECEBER' . "\r\n";
                }
            } else {
                $arquivosGerados->naoConciliados .= $row[1] . ';' . $row[7] . ';' . DateTime::createFromFormat('n/j/Y', $row[14])->format('d/m/Y') . ';' . 'NAO CONCILIADO CONTAS A PAGAR' . "\r\n";
            }
        }


        $ret = new stdClass();
        $ret->conciliados = null;
        $ret->naoConciliados = null;

        if ($arquivosGerados->conciliados != null) {
            $ret->conciliados = self::makeCNAB($arquivosGerados->headerArquivo, $arquivosGerados->trailerArquivo, $arquivosGerados->conciliados);
        }


        if ($arquivosGerados->naoConciliados != '') {
            $ret->naoConciliados = $arquivosGerados->naoConciliados;
        }

        return $ret;
    }


    private static function makeLote($data, $discountValue = '')
    {

        $discountValue = str_pad($discountValue, 15, '0', STR_PAD_LEFT);

        $segT = unserialize($data['segmento_t']);
        $segT['T7'] = '06';

        $segU = unserialize($data['segmento_u']);
        $segU['U7'] = '06';
        $segU['U12'] = $discountValue;
        $segU['U13'] = $discountValue;


        $file =  implode('', unserialize($data['header_lote'])) . "\r\n";
        $file .= implode('', $segT) . "\r\n";
        $file .= implode('', $segU) . "\r\n";
        $file .= implode('', unserialize($data['trailler_lote'])) . "\r\n";

        return $file;
    }

    private static function makeCNAB($headerArquivo, $trailerArquivo, $detalhes)
    {
        return implode('', unserialize($headerArquivo)) . "\r\n" .  $detalhes . implode('', unserialize($trailerArquivo))  . "\r\n";
    }

    private static function extractValues($row)
    {
        $documentNumber = self::formatDocument($row[1]);
        $amount = self::formatMoney($row[7]);
        $paymentDate = self::formatDate($row[14]);
        $reference = self::formatReference($row[2]);

        $obj = new stdClass();
        $obj->documentNumber = $documentNumber;
        $obj->paymentDate = $paymentDate;
        $obj->amount = $amount;
        $obj->reference = $reference;

        return $obj;
    }

    private static function formatDate($date)
    {
        $explode = explode('/', $date);

        $mes = str_pad($explode[0], 2, '0', STR_PAD_LEFT);
        $dia = str_pad($explode[1], 2, '0', STR_PAD_LEFT);
        $ano = $explode[2];

        return $dia . $mes . $ano;
    }

    private static function formatMoney($money)
    {
        $money = str_replace(['.', ',', '-', " "], '', $money);

        return str_pad($money, 15, '0', STR_PAD_LEFT);
    }

    private static function formatDocument($documentNumber)
    {
        return trim($documentNumber);
    }

    private static function formatReference($reference)
    {
        $replace = str_replace(['.', ',', '-', " ", "\t"], "-", $reference);

        $exploded = explode("-", $replace);

        if (count($exploded) == 1) {
            return str_pad($reference, 15, "0", STR_PAD_LEFT);
        }

        if (strlen($exploded[0]) == 15) {
            return $reference;
        } else {
            return str_pad($exploded[0], 12, "0", STR_PAD_LEFT) . "001";
        }
    }
}
