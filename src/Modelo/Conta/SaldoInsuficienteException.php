<?php


namespace Alura\Banco\Modelo\Conta;

use Throwable;

class SaldoInsuficienteException extends \DomainException
{
    public function __construct(float $valorSaque, float $saldoAtual)
    {
        $mensagem = "Você Tentou sacar $valorSaque, mas so temos $saldoAtual em conta.";
        parent::__construct($mensagem);
    }
}