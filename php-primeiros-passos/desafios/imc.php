<?php

$peso = 65;
$altura = 1.65;

$imc = $peso / ($altura ** 2);

echo "IMC: $imc" . PHP_EOL;
if ($imc < 18.5) {
    echo "Abaixo";
} else if ($imc < 24.9) {
    echo "Detro";
} else {
    echo "Acima";
}

echo " do recomendado";