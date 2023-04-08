<?php

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não tem saldo suficiente");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}
//uma funcionalidade de usar dps, a quebra de linha das msg fica separada em um lugar no codigo :
function exibeMensagem(string $mensagem){
    echo $mensagem . '<br>';
}

function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }
    return $conta;
}

//transformar as letras em maiscula
function titularComLetrasMaiusculas(array &$conta) //o & serve q eue stou recebendo a conta em si e n a COPIA dela, nisso fica em maisculo
{
    $conta['titular'] = strtoupper($conta['titular']); // strtoupper - transformar o nome em letras masicula
}

/* - item da lista 
function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}
*/
