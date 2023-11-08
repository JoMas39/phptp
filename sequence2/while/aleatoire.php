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

//Affichage à l'utilisateur
echo "L'ordinateur a lui aussi trouvé $random";
echo PHP_EOL;
echo "Le nombre à trouver a été deviné en $tours coups.";
echo PHP_EOL;