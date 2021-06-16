<?php

include_once _FONTES_DIR . DS . $_RULE . DS . 'vendor/autoload.php';
include_once _FONTES_DIR . DS . $_RULE . DS . 'custom' . DS . 'src' . DS . 'autoload.php';

try {
    $spreadSheetManager = new SpreadSheetManager($NOME_ARQ_FINAL);
    $dataSpreadSheet = $spreadSheetManager->getData();
    $spreadSheetManager = null;

    $retornosGerados = Core::exec($dataSpreadSheet);

    Logger::getInstance()->write('INFO', '#############################');

    if ($retornosGerados->conciliados != null) {
        Logger::getInstance()->write('INFO', '------------------------' . print_r('Gerando arquivos conciliados - RETORNO', 1));
        $nomeRetorno = _PROC_DIR_ENTRADA . DS . 'retorno' . '_' . uniqid();
        file_put_contents($nomeRetorno, $retornosGerados->conciliados);

        Logger::getInstance()->write('INFO', '------------------------' . print_r('Gerando arquivos conciliados - REMESSA', 1));
        $nomeRemessa = _PROC_DIR_ENTRADA . DS . 'remessa' . '_' . uniqid();
        file_put_contents($nomeRemessa, $retornosGerados->conciliados);

        $file->additionalFiles[] = $nomeRemessa;
        $file->additionalFiles[] = $nomeRetorno;
    }

    if ($retornosGerados->naoConciliados != null) {
        Logger::getInstance()->write('INFO', '------------------------' . print_r('Gerando arquivos NAO conciliados', 1));
        $nomeNaoConciliados = _PROC_DIR_ENTRADA . DS . 'naoconciliados' . '_' . uniqid();
        file_put_contents($nomeNaoConciliados, $retornosGerados->naoConciliados);

        $file->additionalFiles[] = $nomeNaoConciliados;
    }
} catch (Exception $e) {
    $ERRO1[] = true;
    $QUARENTENA = false;
    logger::getInstance()->write('ERRO', 'ERRO AO EXECUTAR CUSTOM -> ' . $e->getMessage());
}
