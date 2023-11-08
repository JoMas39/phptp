<?php

// compter de 1 à 8.

echo 1 . ' ';
echo 2 . ' ';
echo 3 . ' ';
echo 4 . ' ';
echo 5 . ' ';
echo 6 . ' ';
echo 7 . ' ';
echo 8 . ' ';
echo PHP_EOL;

// Compter de 1 à 8 en utilisant une boucle "while"

$nombre=1;

while ($nombre<=8){
 // Affichage du nombre
    echo $nombre . ' ';
// On passe au nombre suivant
    $nombre = $nombre+1;
}



// On veut compter jusqu'à 100
while ($nombre<=100){
    // Affichage du nombre
    echo $nombre . ' ';
// On passe au nombre suivant
    $nombre = $nombre+1;
}

while ($nombre<=100){
    // Affichage du nombre
    echo $nombre . ' ';
// On passe au nombre suivant
    $nombre++;
}

while ($nombre<=100){
    // Affichage du nombre
    echo $nombre . ' ';
// On passe au nombre suivant
    $nombre+=1;
}

// On sort de la boucle
echo "Le comptage est terminé";