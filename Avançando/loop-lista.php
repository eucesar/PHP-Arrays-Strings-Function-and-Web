<?php 

$idadeLista = [21,23,19,25,30,41,18];

//vai CONTAR quantos itens tem na lista
echo count($idadeLista).PHP_EOL;

/*
//n pode ser <= pq vai dar erro falando q n existe
for ($i=0; $i < 7 ; $i++) { 
    echo $idadeLista[$i] . PHP_EOL; //acessar a lista e dps aplicar em td o array - na ordem
}
*/

for ($i=0; $i < count($idadeLista) ; $i++){
    echo $idadeLista[$i] . PHP_EOL;
}
