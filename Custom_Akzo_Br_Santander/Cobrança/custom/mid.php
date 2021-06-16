<?php

include_once 'CustomDAO.php';

$dao = new CustomDAO();
$dao->begin();
global $output_tmp;

foreach($output_tmp->lines as $k => $item) {
    
    $segmento = $output_tmp->registros[$k];

    if($segmento == 'HARQ'){

        $headerArquivo = serialize($output_tmp->lines[$k]);
    }

    if($segmento == 'HLOT'){

        $headerLote = serialize($output_tmp->lines[$k]);
    }

    if($segmento == 'SEGT'){

        $flagSegT = false;

        $cnpjAncora = substr($output_tmp->lines[$k]['T24'], 1, 14);

        Logger::getInstance()->write(LOG_INFO, '###########'.substr($cnpjAncora, 0, -6));
        
        if($output_tmp->lines[$k]['T7'] == '02' && $dao->consultaCNPJ($cnpjAncora)){

            Logger::getInstance()->write(LOG_INFO, '###########'.$cnpjAncora);
            $reference = $output_tmp->lines[$k]['T15'];
            $reference = str_pad(str_replace(['.', ',', '-', ' '], '', $reference), 15, '0', STR_PAD_LEFT);
            $segmentoT = serialize($output_tmp->lines[$k]);
            $flagSegT = true;
        }
    }

    if($segmento == 'SEGU'){

        if($flagSegT){

            $segmentoU = serialize($output_tmp->lines[$k]);

            $arrDetalhes[] = array(
              'reference' => $reference,
              'segT' => $segmentoT,
              'segU' => $segmentoU
            );
        }
    }

    if($segmento == 'TLOT'){
        $arrLotes[] = array( 
            'headLote' => $headerLote,
            'detalhes' => $arrDetalhes,
            'traillerLote' => serialize($output_tmp->lines[$k])
        );
    }

    if($segmento == 'TARQ'){

        $traillerArquivo = serialize($output_tmp->lines[$k]);
    }
}

foreach ($arrLotes as $lote) {

    if(isset($lote['detalhes'])){

        foreach($lote['detalhes'] as $detalhe){
            
            $dao->insereRegistros($detalhe['reference'], $headerArquivo, $lote['headLote'], $detalhe['segT'], $detalhe['segU'], $lote['traillerLote'], $traillerArquivo);
        }
    } 
}

$dao->commit();