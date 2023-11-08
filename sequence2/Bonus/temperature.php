<?php

$temperature=readline("Veuillez saisir une température : ");

if (is_numeric($temperature)) {
    echo "Vous avez saisi $temperature.";
    echo PHP_EOL;
} else {
    exit ("Vous n'avez pas été capable de saisir une température correctement. Faites un nouvel essai.");

}

$choixUtilisateur=readline("Ecrivez 'C' si cette température est en Celsius, ou 'F' si cette température est en Fahrenheit : " );

if ($choixUtilisateur=="C") {
    echo "Vous avez choisi une température en Celsius.";
} elseif ($choixUtilisateur=="F") {
    echo "Vous avez choisi une température en Fahrenheit.";
} else {
    exit ("Vous n'avez pas été capable de choisir correctement entre Celsius et Fahrenheit. Faites un nouvel essai.");
}

// Ok ça marche