<?php

function incrementer (int $nombre): int {
    $nombre+=1 ;
    return $nombre;
}

$compteur=1;
$resultat=incrementer($compteur);
echo $resultat;
echo PHP_EOL;


//Autre manière :
function incrementer2 (int & $nombre): void {
    $nombre+=1 ;
}
$compteur=1;
incrementer2($compteur);
echo $compteur;
// $compteur est modifié et conservé juste grâce au '&' que l'on a placé dans la fonction.
//La fonction modifie la variable.