<?php

// Saisir le nombre
$nombre=readline("Veuillez saisir un nombre entre 0 et 1000 : ");
echo "Vous avez choisi : '$nombre'.";
echo PHP_EOL;

// Définir le random
$random=random_int(0,1000);

// Définir le calcul du nombre de coups
$tours=0;

// Boucle
while ($random!=$nombre){
    $random=random_int(0,1000);
    $tours++;
}
if ($tours <= 200) {
    echo "L'ordinateur a lui aussi trouvé $random. Le nombre à trouver a été deviné en $tours coups.";
    }
else{
    echo "L'ordinateur n'a pas deviné en moins de 200 coups";
        }
