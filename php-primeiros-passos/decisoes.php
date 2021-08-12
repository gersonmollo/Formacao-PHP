<?php

$idade = 15;
$numeroDePessoas = 1; 

echo 'Você só pode entrar se tiver a partir e 18 anos.'. PHP_EOL;
echo 'A partir de 16 anos acompanhado' . PHP_EOL;

if ($idade >= 18) 
    echo "Você tem $idade anos. Pode entrar sozinho.";
else if ($idade >= 16 && $numeroDePessoas > 1) 
    echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
else 
    echo "Você só tem $idade anos.";

echo PHP_EOL;
echo 'Adeus!';