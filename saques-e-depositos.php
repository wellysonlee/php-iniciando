<?php

include 'funcoes.php';

$contasCorrentes = [
    '087.204.653-10' => [
        'titular' => 'Wellyson',
        'saldo' => 10000
    ],
    '123.516.285-96' => [
        'titular' => 'Manu',
        'saldo' => 300
    ],
    '864.844.265-83' => [
        'titular' => 'Ariana',
        'saldo' => 100
    ]
];

$contasCorrentes['087.204.653-10'] = sacar(
    $contasCorrentes['087.204.653-10'],
    500
);

$contasCorrentes['123.516.285-96'] = sacar(
    $contasCorrentes['123.516.285-96'],
    200
);

$contasCorrentes['864.844.265-83'] = depositar(
    $contasCorrentes['864.844.265-83'],
    900
);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}
