<?php

$notas = [
    10,
    9,
    6,
    7
];

$notasOrdenadas = $notas;
sort($notasOrdenadas);

echo 'Desordenadas:';
var_dump($notas);

echo 'Ordenadas:';
var_dump($notasOrdenadas);