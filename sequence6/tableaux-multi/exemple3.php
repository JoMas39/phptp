<?php

// Déclaration d'un tableau associatif bi-dimensionnel
// dont les éléments sont des tableaux indexés

// Déclarer un tableau associatif '$etudiants'
// Chaque élément représente un étudiant avec son nom et ses notes
// La clé de l'élément est le nom de l'étudiant
// La valeur de l'élément est un tableau indexé de notes
// Chaque étudiant peut avoir un nombre de notes différent
$etudiants = [
    "Dupont" => [10,12,9],
    "Durand" => [15,8,12],
    "Martin" => [10,8,9,10]
];

// Afficher une valeur du tableau
// Afficher la 2ème note de Dupont
echo "-------------------------------------" . PHP_EOL;
echo $etudiants["Dupont"][1];
echo PHP_EOL;

// Afficher toutes les notes des étudiants
echo "-------------------------------------" . PHP_EOL;
foreach ($etudiants as $notes){
    foreach ($notes as $note){
        echo "$note ";
    }
    echo PHP_EOL;
}

// Afficher tous les éléments (clé et valeur) du tableau
echo "-------------------------------------" . PHP_EOL;
foreach ($etudiants as $nom=>$notes){
    echo "$nom : ";
    foreach ($notes as $note){
        echo "$note ";
    }
 echo PHP_EOL;
}

// Calculer la moyenne de chaque étudiant
// Créer un nouveau tableau "$moyennes"
//// La clé est le nom de l'étudiant
/// // La valeur est la moyenne de l'étudiant
echo "-------------------------------------" . PHP_EOL;
$somme=0;
$moyennes=[];
foreach ($etudiants as $nom=>$notes){
    $somme=array_sum($notes);
    $moyenne=round($somme/count($notes));
// Ajouter la moyenne dans le tableau
    $moyennes[$nom] = $moyenne;
}
print_r($moyennes);

