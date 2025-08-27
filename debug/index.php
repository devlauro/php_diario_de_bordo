<?php

use Lauro\Php\ContaBancaria;

require_once __DIR__ . '/../vendor/autoload.php';

$conta = new ContaBancaria(
    'Banco do Brasil', 
    'Lauro Otavio Urbano', 
    '1234-5', 
    '123456-7', 
    100
);

$conta2 = new ContaBancaria(
    'Banrisul',
    'Joelma Urbano',
    '234-5',
    '23456-7',
    100
);

echo $conta->exibirDadosDaConta()['nomeTitular'] . "\n" . $conta->exibirDadosDaConta()['saldo'] . "\n";
echo $conta2->exibirDadosDaConta()['nomeTitular'] . "\n" . $conta2->exibirDadosDaConta()['saldo'] . "\n";

$conta->transferir($conta2, 20);
echo $conta->exibirDadosDaConta()['nomeTitular'] . "\n" . $conta->exibirDadosDaConta()['saldo'] . "\n";
echo $conta2->exibirDadosDaConta()['nomeTitular'] . "\n" . $conta2->exibirDadosDaConta()['saldo'] . "\n";
