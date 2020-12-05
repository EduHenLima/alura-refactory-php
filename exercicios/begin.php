<?php

function f1()
{
    echo 'B BEGIN' . PHP_EOL;
    f2(); // f1 chamda o f2
    echo 'B END' . PHP_EOL;
}

function f2()
{ // faz os echo na tela
    echo 'A BEGIN' . PHP_EOL;
    echo 'A END' . PHP_EOL;
}

echo 'MAIN BEGIN' . PHP_EOL; // chamada o begin
f1(); // chamada o f1
echo 'MAIN END' . PHP_EOL; // finaliza o programa

/* Ordenação da execução do programa
    MAIN BEGIN
    B BEGIN
    A BEGIN
    A END
    B END
    MAIN END
*/