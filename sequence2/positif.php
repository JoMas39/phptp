<?php

//Demander la saisie d'un nombre à l'utilisateur
//Afficher si le nombre saisi est positif ou négatif

$nombre=readline("Veuillez saisir un nombre entier :");
echo "Vous avez choisi le nombre ".$nombre;
echo PHP_EOL;

//Concaténation la variable est directement dans la chaîne
// echo "le nombre $nombre est positif"
if($nombre>=0){
   echo "Le nombre $nombre est positif";
}
else{
    echo "Le nombre " .$nombre. " est négatif";
}
// Interpolation : intégrer une variable dans une chaîne de caractère
// echo "le nombre " .$nombre. " est positif"