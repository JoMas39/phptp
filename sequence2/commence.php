<?php

/// Demander la saisie d'un mot (n'importe lequel) à l'utilisateur
/// Afficher si le mot commence par la lettre "p"

$mot=readline("Veuillez saisir un mot : ");
echo PHP_EOL;

echo "Vous avez choisi le mot '$mot'.";
echo PHP_EOL;


// On utilise la fonction strtolower juste avant ($mot) pour le transformer temporairement en minuscules
if(str_starts_with(strtolower($mot),"p")){
    echo "Le mot $mot commence par la lettre 'p'.";
}
else{
    echo "Le mot $mot ne commence pas par la lettre 'p'.";
}

echo PHP_EOL;

// Afficher si le mot contient plus de 5 lettres (inclus)

if(strlen($mot)>=5){
    echo "Le mot $mot contient au moins cinq lettres";
} else{
    echo "Le mot $mot contient moins de cinq lettres";
}