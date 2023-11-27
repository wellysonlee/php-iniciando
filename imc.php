<?php

$peso = 78;
$altura = 1.75;
$imc= $peso/$altura**2;

if ($imc > 18.5 && $imc <24.9){
    echo "Seu IMC é $imc, você está no peso ideal";
} else if ($imc < 18.5){
    echo "Seu IMC é $imc, Você está abaixo do peso.";
} else {
    echo "Seu IMC é $imc. Você está acima do peso";
}
    
// eu que fiz hihi