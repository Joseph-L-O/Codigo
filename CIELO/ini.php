<?php
// Analise da Custom da Cielo:

require 'splitUtils.php';
// inclusão de arquivo 

global $file; //variavel global do finnetmap

$file->rule = new rule($_RULE);
$file->rule->nsa = 1;

$dados = splitUtils::recuperaDadosArquivo($NOME_ARQ_FINAL); //$dados e splitado recupera dados no (NOME_ARQ_FINAL)
array_pop($dados);
$codEstabelecimentos = splitUtils::recuperaCodEstabelecimento($dados);

foreach ($codEstabelecimentos as $codEst) {

    if ($file->rule->nsa > 99) {
        $file->rule->nsa = 1;
    }
    $file->rule->setNsa();
    $__timestamp = date('YmdHis') . substr(microtime(), 2, 3);
    $splitNsa = str_pad($file->rule->nsa, 2, '0', STR_PAD_LEFT);
    // $nome_final = 'VISEEFI_locacao_'.date("dm").$splitNsa.'.ret';

    // if ($codEst == '1096298438' || $codEst == '1029093110') {
    //     $nome_final = 'RVISEEFI04_' . $codEst . '_' . date("dmy") . $splitNsa . '.TXT.' . $__timestamp;
    // } else {
        $nome_final = 'CVISEEFI04_' . $codEst . '_' . date("dmy") . $splitNsa . '.ret.' . $__timestamp;  // Muda a nomenclatura do arquivo. para CVISEEFI04
    // }

    $file->additionalFiles[] = splitUtils::geraArquivoSplitado($codEst, $dados, $nome_final, $quantRegistros);
    $file->rule->nsa++;
}
