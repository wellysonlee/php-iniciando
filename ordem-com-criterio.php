<?php

$notas = [
    [
        'Aluno' => 'Wellyson',
        'nota' => 10
    ],
    [
        'Aluno' => 'Sara',
        'nota' => 5
    ],
    [
        'Aluno' => 'Lara',
        'nota' => 8
    ],
];

function ordenaNotas (array $nota1, array $nota2): int
{
    if ($nota1['nota'] > $nota2['nota']){
        return -1;
    }
    if ($nota2['nota'] > $nota1['nota']){
        return 1;
    }
    return 0;
}

usort ($notas, 'ordenaNotas');
var_dump($notas);