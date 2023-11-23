<?php

namespace app\helpers;

function formatException(\Throwable $throw) {
    var_dump("Erro no arquivo {$throw->getFile()} na linha {$throw->getFile()} com a mensagem {$throw->getMessage()}");
}