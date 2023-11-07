<?php
//Déclarer et initialiser une variable contenant le prénom d'une personne
$prenom = "Louis";
echo $prenom;

$prenomPersonne = "Michel"; // Le deuxième mot commence par une majuscule par souci de lisibilité. C'est la notation camelCase.
echo PHP_EOL;

$prenom = "Pierre"; //Modification de la variable prénom
echo $prenom;
echo PHP_EOL;

//Déclarer et initialiser une variable contenant le résultat de 5 + 8
$addition = 5+8;
echo $addition;
echo PHP_EOL;

//Concaténation de châines : mettre plusieurs châines les unes derrière les autres.
// On utilise l'opérateur "." qui sépare les chaînes.
echo "Mon prénom est ".$prenom;
echo PHP_EOL;

$prenom="Jean";
echo "Mon prénom est ".$prenom;
echo PHP_EOL;

// Ou alors on utilise l'interpolation pour la concaténation.
// On intègre la deuxième chaîne dans la première.
echo "Mon prénom est $prenom";
echo PHP_EOL;
echo "Mon prénom est $prenom et j'ai $addition ans";
echo PHP_EOL;
// Il faut des " " pour faire de l'interpolation. Avec des ' ' ça marche pas.
echo 'Mon prénom est $prenom';
echo PHP_EOL;

$presentation="Mon prénom est $prenom";
echo $presentation;
echo PHP_EOL;

echo "Bonjour je m'appelle Franck";
echo PHP_EOL;
echo 'Bonjour je m\'appelle Franck';
echo PHP_EOL;
//ctrl+d pour copier/coller la ligne juste en-dessous.

