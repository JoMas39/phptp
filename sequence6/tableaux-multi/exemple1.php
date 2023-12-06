<?php

// Déclaration d'un tableau indexé bi-dimensionnel
// dont les valeurs sont des tableaux indexés d'entiers
// Chaque valeur peut être un tableau de taille différente
$tab = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9, 10]
];

// Afficher une valeur particulière du tableau
echo "-------------------------------------" . PHP_EOL;
// Il faut 2 index pour afficher une seule valeur du tableau.
echo $tab [0][1];
echo PHP_EOL;

// Afficher toutes les valeurs du tableau
echo "-------------------------------------" . PHP_EOL;
foreach ($tab as $ligne){
    // $ligne est un tableau
    // Donc il faut une nouvelle boucle
    foreach ($ligne as $valeur) {
        echo "$valeur ";
    }
    echo PHP_EOL;
}
// Tableau bi donc 2 boucles !


// Afficher tous les éléments (index et valeur) du tableau
echo "-------------------------------------" . PHP_EOL;
foreach ($tab as $index => $ligne){
    foreach ($ligne as $index2 => $valeur) {
        echo "tab[$index][$index2] = $valeur ";
    }
    echo PHP_EOL;
}
