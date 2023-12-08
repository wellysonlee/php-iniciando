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
    return  $nota1['nota'] <=> $nota2['nota'];
}

usort ($notas, 'ordenaNotas');
var_dump($notas);
