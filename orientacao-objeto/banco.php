<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$cpfTitular1 = new Cpf('123.4546.789-10');
$titular1 = new Titular('Gerson Mollo', $cpfTitular1);
$primeiraConta = new Conta($titular1);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

$cpfTitular2 = new Cpf('111.4546.789-10');
$titular2 = new Titular('Gerson Mollo 2', $cpfTitular2);
$segundaConta = new Conta($titular2);

echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$cpfTitular3 = new Cpf('123');
$titular3 = new Titular('abcadsef', $cpfTitular3);
new Conta($titular3);
echo Conta::recuperaNumeroDeContas();