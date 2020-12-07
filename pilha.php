<?php

function funcao1()
{
    try {
        echo 'Entrei na função 1' . PHP_EOL;
        funcao2();
    } catch (RuntimeException | DivisionByZeroError $e){ // utilizando multi-catch
        echo $e->getMessage() . PHP_EOL; // Retornando o erro viavel tento da exception
        echo $e->getLine() . PHP_EOL; // Qual linha estorou o erro;
        echo $e->getTraceAsString() . PHP_EOL; // Pilha de execução para chegar no mesmo
    }
}

function funcao2()
{
    $int = intdiv(6,0);
    $teste = new SplFixedArray(1);
    echo 'Entrei na função 2' . PHP_EOL;
    echo $teste[2] = 'valor';
    echo 'Entrei na função 1' . PHP_EOL;

    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
echo 'Finalizando' . PHP_EOL;
echo 'Finalizando' . PHP_EOL;
