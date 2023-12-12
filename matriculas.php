<?php

$alunos2023 = [
    0 => 'Wellyson',
    1 => 'Manu',
    2 => 'Weslley',
    3 => 'Lara',
    4 => 'Sara',
];

$novosAlunos =[
    5 => 'Ariana',
    6 => 'Gisely',
    7 => 'Emerson',
    8 => 'Miguel',
    9 => 'Luiz',
];

$alunos2024 = array_merge ($alunos2023,$novosAlunos);
var_dump($alunos2024);