<?php

// include 'funcoes.php'; // O arquivo nao precisa existir para funcionar
// require 'funcoes.php'; // O arquivo precisa existir para funcionar
require_once 'funcoes.php'; // Se tentar incluir de novo o mesmo arquivo nao da erro

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ], 
    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    '123.456.789-12' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);

$contasCorrentes['123.456.789-11'] = depositar($contasCorrentes['123.456.789-11'], 500);

titularComLetrasMaiusculas($contasCorrentes['123.456.789-11']);

unset($contasCorrentes['123.456.789-12']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="I   E=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf => $contas) { ?>
            <dt>
                <h3><?= "{$contas['titular']} - $cpf"?></h3>
            </dt>
            <dd>
                Saldo: <?= "{$contas['saldo']}"?>
            </dd>
        <?php } ?>
    </dl>
</body>
</html>