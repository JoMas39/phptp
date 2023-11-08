<?php


$nombre=0;
$saisie=readline("Veuillez saisir un nombre : ");

$somme = 0 ;
while ($nombre<=$saisie) {
// Affichage du nombre
    if ($nombre % 2 == 0){
        echo $nombre . ' ';
    }
    // On passe au nombre suivant
    $somme=$somme+$nombre;
    $nombre+=1;
// On passe au nombre suivant


}

echo PHP_EOL;
echo "La somme de tous ces nombres est : " .number_format($somme,0, ' ',' '). ".";

//OK CA MARCHE