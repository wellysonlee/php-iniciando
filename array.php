<?php

$array = [
    casa => 'house',
    bola => 'ball',
    livro => 'book'
];

foreach ($array as $traducao => $nomeIngles) {
    echo "$traducao em inglês é: $nomeIngles".PHP_EOL;
}

echo "Total: ". count($array).PHP_EOL;