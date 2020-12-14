<?php

// Setar no PHP.ini, não fica em arquivo essas config
error_reporting(E_ALL); // retornando todos os tipos de erros
ini_set('display_erros', 1); // Relatando todos os erros
ini_set('log_erros', 1); // Relatando todos os erros
ini_set('error_log', '/logs'); // Procurar como criar arquivo de log

set_error_handler(function($errno, $errstr, $errfile, $errline) {
    // rettornando os tipos de erros
    switch ($errno){
        // caso seja warning, retornando o aviso de perigo
        case E_WARNING:
            echo 'Avis: Isso é perigoso' . PHP_EOL;
            break;
            // caso seja notice, retornando que não é recomendavel
        case E_NOTICE:
            echo "Melhor não fazer isso" . PHP_EOL;
            break;
    }
    // Retornando todos os erros
//    var_dump($errno, $errstr, $errfile, $errline);

});

// Erro fatal
echo $var;

// Erro Notice
// Operador de supressão de erro
// Os erro que da ele esconde com o @(Arroba)
echo $array[0];

// Erro Warning
echo TESTE;

