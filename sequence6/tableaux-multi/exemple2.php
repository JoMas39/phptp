<?php

// Déclaration d'un tableau indexé bi-dimensionnel
// dont les valeurs sont des tableaux associatifs

// Déclarer un tableau indexé '$personnes'
// Chaque élément représente une personne avec son nom, son prénom et son âge
// La valeur de l'élément est un tableau associatif avec les clés "nom", "prenom" et "age"
// Chaque valeur est indexée par un entier
// Chaque valeur possède les mêmes clés, la même structure
$personnes = [
    ["nom" => "Dupont", "prenom" => "Jean", "age" => 25],
    ["nom" => "Durand", "prenom" => "Paul", "age" => 30],
    ["nom" => "Martin", "prenom" => "Marie", "age" => 20]
];

echo "-------------------------------------" . PHP_EOL;
// Afficher une valeur particulière du tableau
echo $personnes [1]["prenom"];
echo PHP_EOL;

// Afficher toutes les valeurs du tableau
echo "-------------------------------------" . PHP_EOL;
// $personne = tableau associatif
foreach ($personnes as $personne) {
    foreach ($personne as $valeur){
        echo "$valeur ";
    }
    echo PHP_EOL;
}

// Afficher toutes les valeurs du tableau avec le destructuring
// Utilisation possible car chaque valeur (tableau associatif) possède les mêmes clés
echo "-------------------------------------" . PHP_EOL;
foreach ($personnes as $personne){
    // Destructuring
    ["nom"=>$nom,"prenom"=>$prenom, "age"=>$age]=$personne;
    echo "$nom $prenom $age";
    echo PHP_EOL;
}

// Afficher tous les éléments (index et valeur) du tableau
echo "-------------------------------------" . PHP_EOL;
foreach ($personnes as $index=>$personne){
    foreach ($personne as $cle=>$valeur){
        echo "personnes[$index][$cle] = $valeur";
    }
    echo PHP_EOL;
}
// Calculer la moyenne d'âge des personnes du tableau
echo "-------------------------------------" . PHP_EOL;
$somme=0;
foreach ($personnes as $personne){
    $somme += $personne["age"];
}
$moyenne=$somme/count($personne);
echo "La moyenne des âges est $moyenne.";
