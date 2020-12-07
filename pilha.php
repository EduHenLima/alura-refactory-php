<?php

function funcao1()
{
    try {
        echo 'Entrei na função 1' . PHP_EOL;
        funcao2();
    } catch (RuntimeException $e){
        echo "Deu erro na aplicação" . PHP_EOL;
    }
}

function funcao2()
{
    $teste = new SplFixedArray(1);
    echo 'Entrei na função 2' . PHP_EOL;
    echo $teste[2] = 'valor';
    echo 'Entrei na função 1' . PHP_EOL;

    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;

git config --global user.email "eduardoh.lima17@hotmai.com"
  git config --global user.name "Eduardo Lima"
