<?php


$nombre=0;

while ($nombre<=100) {
// Affichage du nombre
    if ($nombre % 2 == 0){
        echo $nombre . ' ';
    }
    // On passe au nombre suivant
    $nombre+=1;
}

//OK CA MARCHE