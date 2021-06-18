<?php

include_once 'CustomDAO.php'; // incluindo o arquivo CustomDAO.php

$dao = new CustomDAO();   // Instanciando a Classe;
$dao->begin();  // $objeto $dao inicia
global $output_tmp;   // pega a variavel global do finnetmap

foreach($output_tmp->lines as $k => $item) {  // faz um foreach (Para cada $output_tmp->lines como $k => $item) pega a variavel Lines e transforma a Key e a Velue
    
    $segmento = $output_tmp->registros[$k];   //segmento recebe $output->atributo registros, passando o [$k] que armazena $lines.

    if($segmento == 'HARQ'){ //condiçao (se $segmento == 'HARQ') Header de arquivo

        $headerArquivo = serialize($output_tmp->lines[$k]); //$header de arquivo recebe: serialize() registra no banco de dados conforme as tags do finnetmap (SQLyog)
    }

    if($segmento == 'HLOT'){  
     // $segmento == 'HLOT' 

        $headerLote = serialize($output_tmp->lines[$k]);
        //$headerLote recebe serialize($output_tmp->lines[$k]); registra no banco de dados conforme as tags finnetmap (SQLyog)
    }

    if($segmento == 'SEGT'){ 
     // se variavel $segmento == 'SEGT'  

        $flagSegT = false;  
        // variavel flagSegT recebe um bolleano False

        $cnpjAncora = substr($output_tmp->lines[$k]['T24'], 1, 14);
        //$cnpjAncora recebe um substr( $output_tmp->lines[$k]['T24'], 1, 14); pega T24 apartir da 1 posição com tamanho de 14. 

        Logger::getInstance()->write(LOG_INFO, '###########'.substr($cnpjAncora, 0, -6));
        // exibe como resultado, #########, mostra e pega o $cnpjAncora, 0, -6 os seis utimos da variavel
        
        if($output_tmp->lines[$k]['T7'] == '02' && $dao->consultaCNPJ($cnpjAncora)){ 
        /*validação, se $output_tmp->lines[$k]['T7] == '02' && $dao ($dao = new CustomDAO(); Instanciando a Classe;
        -> consultaCNPJ($cnpjAncora) passando cpnpj ancora.
        */

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
