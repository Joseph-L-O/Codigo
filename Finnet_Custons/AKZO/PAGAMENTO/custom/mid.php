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

    if($segmento == 'SEGA'){

    	$flagSegA = false;

    	if(preg_match('/OF/', $output_tmp->lines[$k]['A28'])){

            $documentNumber = trim($output_tmp->lines[$k]['A16'], ' ');
            $amount = $output_tmp->lines[$k]['A20'];
            $paymentDate = ($output_tmp->lines[$k]['A17']);
    		$segmentoA = serialize($output_tmp->lines[$k]);
			$flagSegA = true;
		}
    }

    if($segmento == 'SEGB'){


    	if($flagSegA && $dao->consultaCNPJ($output_tmp->lines[$k]['B8'])){

            $segmentoB = serialize($output_tmp->lines[$k]);
            $discountValue = $output_tmp->lines[$k]['B19'];

	    	$arrDetalhes[] = array(
              'discountValue' => $discountValue,
              'documentNumber' => $documentNumber,
              'amount' => $amount,
              'paymentDate' => $paymentDate,
	    	  'segA' =>	$segmentoA,
	    	  'segB' =>	$segmentoB
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

            Logger::getInstance()->write(LOG_INFO, 'Inserindo dados para o pagamento: ' . $detalhe['documentNumber']);
            $dao->insereRegistros($detalhe['documentNumber'], $detalhe['amount'], $detalhe['paymentDate'], $detalhe['discountValue']);
        }
    }
}

$dao->commit();
