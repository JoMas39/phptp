<?php

//Déclarer et initialiser un tableau contenant 3 notes.
//Séparation des valeurs : ','

$notes = [12,18,9,8,20,15,6,6,6]; // $notes = array(12,18,9);
// Un tableau contient des valeurs. On appelle ces valeurs des "éléments". Un tableau contient donc en fait des éléments.

echo $notes[0];
// On accède à l'élément qui se trouve à l'index 0 dans le tableau $notes (ici, 12).
// On désigne l'élément par sa place dans l'index.
//L'index commence à 0
echo PHP_EOL;

echo $notes[0], "\n" ;
echo $notes[1], "\n";
echo $notes[2], "\n";
// Là on affiche les trois notes : fonctionne, mais long et ingérable

// Meilleure solution pour afficher chaque élément du tableau : BOUCLE FOR
for ($i=0 ; $i<=5; $i++){
    echo $notes[$i], "\n";
}
// On a rajouté 3 notes dans le tableau. Pour les afficher, on a juste à modifier $i<=5

// N = nombre d'éléments dans le tableau
// alors
// Index : [0,N-1]





// Si on connaît pas la taille du tableau, alors
// for ($i=0 ; $i < count($notes); $i++){
// strictement inférieur

//On a encore rajouté des notes (6) et on teste
for ($i=0 ; $i < count($notes); $i++){
    echo $notes[$i], "\n";
}
echo PHP_EOL;

//BOUCLE FOREACH : permet de parcourir le tableau
foreach ($notes as $note) {
    echo $note, "\n";
}



// On reprend toute la boucle for
for ($i=0 ; $i < count($notes); $i++) {
    echo "$i : $notes[$i]", "\n";
}
// On affiche la valeur ET la place dans l'index

// On veut faire pareil avec foreach
foreach ($notes as $index => $note) {
    echo "$index: $note", "\n";
}

//Ajouter un SEUL élément dans le tableau
$notes[]=20;

// Ajouter PLUSIEURS éléments
array_push($notes,19,18,17.5 );

// Affichage du tableau en mode debug et on supprime l'instruction après
print_r($notes);

// Autre fonction :
// var_dump($notes);
//  = autre affichage, incompréhensible