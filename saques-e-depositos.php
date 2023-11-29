<?php


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
// função de deposito
function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }
    return $conta;
} 


//função de saque

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não tem saldo suficiente");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}
// saques e depositos

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


function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}
