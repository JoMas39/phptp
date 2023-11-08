<?php

$fondRouge = "\033[41m";
$texteRouge = "\033[31m";
$fondVert = "\033[42m";
$texteVert = "\033[32m";
$normal = "\033[0m";

$distance=readline("Veuillez saisir une distance (en kms) :");
$duree=readline("Veuillez  saisir une durée (format h:mn) :");
echo PHP_EOL;

//Convertir durée en heures et en minutes manipulables.
$heureSaisie=substr($duree,0,1);
$minuteSaisie=substr($duree,2,2);

if ($minuteSaisie>59) {
echo $texteRouge."ERREUR : La durée saisie $duree est invalide".$normal;
} else {




//Obtenir le nombre d'heures par lequel on va diviser la distance pour obtenir la vitesse
// tout transformer en minutes
$minutesTotal=($heureSaisie*60)+$minuteSaisie;
echo "Le trajet a duré $minutesTotal minutes.";
echo PHP_EOL;
// Ok jusqu'ici

//Retransformer les minutes en heures
$heureTotale=$minutesTotal/60;
echo "Le trajet a donc duré $heureTotale heures.";
echo PHP_EOL;
// Ok jusqu'ici

// Formule pour obtenir la vitesse
//V=D/t où V= Vitesse , D= Distance parcourue et t=temps mis à la parcourir

$vitesse=$distance/$heureTotale;
echo "La vitesse moyenne du trajet est de " .ceil($vitesse). " Km/h.";
echo PHP_EOL;

if ($vitesse>90) {
    echo $fondRouge."Vous êtes au-dessus des 90km/h".$normal;
} else {
    echo $fondVert."Vous êtes en-dessous des 90km/h".$normal;
}
}