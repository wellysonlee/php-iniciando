<?php

$nome = 'Welluson Martins';

$ehDaMinhaFamilia = str_contains($nome, 'Martins');

if ($ehDaMinhaFamilia){
    echo "$nome é da minha família.".PHP_EOL;
} else {
    echo "$nome não é da minha família.".PHP_EOL;
}