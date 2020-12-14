<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, SaldoInsuficienteException, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Eduardo Lima',
        new Endereco('Av Lirio jacomel', 'bairro Teste', 'Rua Esquina Teste', '258')
    )
);

try {
    $conta->deposita(-500);
}catch (InvalidArgumentException $exception){
    echo 'Valor precisa ser positivo seu Ráquer perigoso' . PHP_EOL;
}

