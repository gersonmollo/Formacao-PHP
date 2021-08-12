<?php

$contasCorrentes = [
    [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ], 
    [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

foreach ($contasCorrentes as $indice => $conta) {
    echo $conta['titular'] . PHP_EOL;
}