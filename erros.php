<?php

error_reporting(E_ALL); // retornando todos os tipos de erros
ini_set('display_erros', 1); // Relatando todos os erros
ini_set('log_erros', 1); // Relatando todos os erros
ini_set('error_log', '/logs'); // Procurar como criar arquivo de log

// Erro fatal
echo $var;

//Erro Notice
echo $array[0];

// Erro Warning
echo TESTE;