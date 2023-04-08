<?php

//arrau dentro de array = array associativo 
$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

//outra maneira de fazer - sem colocar | $contasCorrentes = [123 => [ 123 => 123, 123 => 123]];
$contasCorrentes['123.258.852-12'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

/* //crio a lista
echo "<ul>";
//essa string vazia quer dizer, q o php poder add uma nova lista de cpf se alguns desses itens n tiver nd, baseando no 1° cpf
foreach ($contasCorrentes as $cpf => $conta) { //dar nome para cada item da conta
    exibeConta($conta);
}
echo "</ul>";
*/
