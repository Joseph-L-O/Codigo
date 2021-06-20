<?php

//analise do codigo da CIELO:

class splitUtils
{

    public static function recuperaDadosArquivo($nomeArquivo)
    {


        $output = array();
        $__tempFile = new SplFileObject($nomeArquivo, 'r');

        while (!$__tempFile->eof()) {

            $tempLine = $__tempFile->fgets();
            $output[] = $tempLine;
            $__tempFile->next();
        }

        $__tempFile = null;
        return $output;
    }


    public static function recuperaCodEstabelecimento($dados)
    {

        $codEstabelecimentos = array();

        foreach ($dados as $linhas) {
            if (substr($linhas, 0, 1) != '0' && substr($linhas, 0, 1) != '9') {
                if (!in_array(substr($linhas, 1, 10), $codEstabelecimentos)) {
                    $codEstabelecimentos[] = substr($linhas, 1, 10);
                    
                }
            }
        }
        return $codEstabelecimentos;
    }


    public static function geraArquivoSplitado($codEstabelecimento, $dados, $nome_final)
    {
        $headerArq  = $dados[0];
        $quantRegistros = 0;

        $__splitFilePath = _ZONAPROCESSAMENTO_DIR . DS . 'ENTRADA' . DS . $nome_final;
        $__splitFile = new SplFileObject($__splitFilePath, 'w');
        $__splitFile->fwrite(substr($headerArq, 0, 240) . "\n");

        foreach ($dados as $linhas) {
            if ($codEstabelecimento == substr($linhas, 1, 10) && substr($linhas, 0, 1) != '0') {
                $__splitFile->fwrite(str_replace('Array', '', $linhas));
                $quantRegistros++;
            }
        }

        $traillerArq = self::recalculaTrailler($quantRegistros);
        $__splitFile->fwrite($traillerArq);
        $__splitFile = null;
        return $__splitFilePath;
    }

    public static function recalculaTrailler($quantRegistros)
    {
        $quantRegistros =  str_pad($quantRegistros, 11, '0', STR_PAD_LEFT);
        $traillerArq = '9' . $quantRegistros;
        $traillerArq = str_pad($traillerArq, 250, ' ', STR_PAD_RIGHT) . "\n";

        return $traillerArq;
        /*
        *@return adiciona um split;
        */
    }
}
