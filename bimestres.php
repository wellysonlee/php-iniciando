<?php

$notasBimestre1 = [
    'Wellyson' => 6,
    'Manu' => 8,
    'Weslley' => 10,
    'Lara' => 7,
    'Sara' => 9,
];

$notasBimestre2 = [
    'Wellyson' => 6,
    'Weslley' => 10,
    'Sara' => 9,
];

$alunosFaltantes = array_diff($notasBimestre1, $notasBimestre2);
$nomeAlunos = array_keys($alunosFaltantes);
$notaAlunos = array_values($alunosFaltantes);

var_dump(array_combine($nomeAlunos, $notaAlunos));
var_dump(array_flip($alunosFaltantes));