<?php

foreach ($file->additionalFiles as $k => $arq) {
    $file->additionalFilesPath[$k] = 'CONFIRMING_REP';
    $file->additionalFilesProcess[$k] = 'ESB';
    $file->additionalFilesProcessParameters[$k] = array(
        'ordenarProcessamento' => 0,
        'filaPropria' => 0,
        'origem' => $COD_ORIG
    );
}
