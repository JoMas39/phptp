<?php

$taille=readline("Veuillez renseigner votre taille (en cm).");
$poids=readline("Veuillez renseigner votre poids (en kg).");

$tailleVirgule=$taille/100;

$imc=$poids/($tailleVirgule*$tailleVirgule);

if ($taille<0) {
echo "Erreur : la taille saisie est négative." ;
} elseif ($poids<0) {
    echo "Erreur : le poids saisi est négatif.";
} else {
    echo "Votre IMC est : " .round($imc,2);
}

// Ok ça marche