<?php
//Chaque variable reste dans son fichier

$prenom = "jean";
// Afficher $prenom en majuscules
// string to upper = chaîne en majuscules
echo strtoupper($prenom);
echo PHP_EOL;

$prenomMaj = strtoupper($prenom);

// Compter le nombre de caractères de la chaîne
echo strlen($prenom);
echo PHP_EOL;

//Concaténer des fonctions dans une chaîne de caractères. Le premier caractère d'une chaîne est à la position 0.
echo "La chaîne " .strtoupper($prenom)." a une valeur de " .strlen($prenom). " caractères.";
echo PHP_EOL;

//Afficher la première lettre du prénom
echo substr($prenom, offset: 0,length: 1);
// On prend un caractère à partir du zéro.
echo PHP_EOL;

//Mettre cette lettre en majuscule
echo strtoupper(substr($prenom, offset: 0,length: 1));
echo PHP_EOL;