<?php

$notas = [
    'Wellyson' => null,
    'Manu' => 8,
    'Weslley' => 10,
    'Lara' => 7,
    'Sara' => 9,
];

function ordenaNotas (array $nota1, array $nota2): int
{
    return  $nota1['nota'] <=> $nota2['nota'];
}

usort ($notas, 'ordenaNotas');
var_dump($notas);

if (is_array($notas)) {
    echo 'Sim, é um array' . PHP_EOL;
}

var_dump(array_is_list($notas));

echo 'Wellyson fez a prova:' . PHP_EOL;
var_dump(isset($notas['Wellyson']));

echo 'Alguém tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas, true));

echo 'Quem tirou 10?' . PHP_EOL;
var_dump(array_search(10, $notas, true));

// array_key_exists = verifica se a chave existe
// in_array = verifica se o valor existe
// isset = verifica se a chave existe e não é nula