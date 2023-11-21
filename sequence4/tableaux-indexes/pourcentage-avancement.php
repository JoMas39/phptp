<?php

echo "Début du traitement";

//Définir tableau
$tableau = array_fill(0, 100000, 1);
$tailleTableau = count($tableau);

for ($i = 0; $i < $tailleTableau; $i++) {
    // pourcentage
$pourcentage=($i++/$tailleTableau)*100;
echo "En cours $pourcentage";
}

