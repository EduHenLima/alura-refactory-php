<?php

function funcao1()
{
    try {
        echo 'Entrei na função 1' . PHP_EOL;
        funcao2();
    } catch (Throwable $e){ // utilizando multi-catch
        throw new RuntimeException( 'Deu pau na bagaça',1 ,$e) ;
        echo $e->getLine() . PHP_EOL; // Qual linha estorou o erro;
        echo $e->getTraceAsString() . PHP_EOL; // Pilha de execução para chegar no mesmo
    }catch (Error $erro){
        echo $erro->getMessage();
    }
}

function funcao2()
{
    echo 'Entrei da função 2' . PHP_EOL;
    $val = 1;
        echo $val[0];
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
echo 'Finalizando' . PHP_EOL;
echo 'Finalizando' . PHP_EOL;
