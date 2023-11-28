<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Wellyson',
        'saldo' => 1000
    ],
    '123.456.789-11' => [
        'titular' => 'Sara',
        'saldo' => 10000
    ],
    '123.256.789-12' => [
    'titular' => 'Lara',
    'saldo' => 300
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['titular'] . PHP_EOL;
}
