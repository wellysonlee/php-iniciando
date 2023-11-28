<?php

$conta1 = [
    'titular'=> 'Wellyson',
    'saldo'=>1000
];

$conta2 = [
    'titular'=> 'Sara',
    'saldo'=>10000
];

$conta3 = [
    'titular'=> 'Lara',
    'saldo'=>300
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;

}