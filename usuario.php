<?php

$email = 'wellyson@gmail.com';
$senha = '1éllll6';

echo mb_strlen($senha).PHP_EOL;

if(mb_strlen($senha) < 8){
    echo 'Senha fraca'.PHP_EOL;
}

$posicaoArroba = strpos($email, '@');

$usuario= substr($email, 0, $posicaoArroba);

echo mb_strtoupper($usuario).PHP_EOL;
echo substr($email, $posicaoArroba + 1).PHP_EOL;
