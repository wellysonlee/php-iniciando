<?php

$dados =  [
    'nome' => 'Wellyson',
    'idade' => 21,
    'altura' => 175,
];

//['nome' => $nome, 'idade' => $idade, 'altura' => $altura] = $dados;

extract($dados);
var_dump($nome, $idade, $altura);