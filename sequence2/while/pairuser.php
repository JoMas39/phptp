<?php


$nombre=0;
$saisie=readline("Veuillez saisir un nombre : ");

while ($nombre<=$saisie) {
// Affichage du nombre
    if ($nombre % 2 == 0){
        echo $nombre . ' ';
    }
    // On passe au nombre suivant
    $nombre+=1;
}

//OK CA MARCHE