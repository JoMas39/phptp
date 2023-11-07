<?php
//Créer un petit formulaire qui demande à l'utilisateur de rentre des nombres.
// Fonction readline

$nombre1=readline("Veuillez saisir un nombre (nombre 1) :");
//le script a retenu la valeur, elle est stockée dans une variable
//on assigne la valeur à une variable

echo "Le nombre choisi est : $nombre1 ";
// pour vérifier que c'est bon on affiche la valeur

echo PHP_EOL;

$nombre2=readline("Veuillez saisir un nombre (nombre 2) :");

echo "Le nombre choisi est : $nombre2 ";

echo PHP_EOL;

$nombre3 = $nombre1;
$nombre1 = $nombre2;
$nombre2 = $nombre3;

echo "Le nombre 1 est : $nombre1 et le nombre 2 est : $nombre2.";

// Ok ça marche