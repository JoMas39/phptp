<?php

// Définit une fonction permettant de déterminer si un nombre passé en paramètre est pair ou impair
//Demande à l'user de saisir un nombre
//Afficher si le nombre saisi est pair ou impair


//La fonction est dans le fichier cours-fonctions.php qui centralise les fonctions
// On doit inclure le fichier dans lequel se trouve la fonction "estPair".
require 'cours-fonctions.php';
//require = le programme s'arrête si le fichier n'existe pas. Plante dès le début.
//include = le programme continue même le fichier n'existe pas, par contre ça déclenche une erreur et ça plantera QUAND la fonction sera utiisé



//Appel de la fonction
$user=readline("Veuillez saisir un nombre : ");
$resultat=estPair($user);
if ($resultat==true){
    echo "Le nombre $user est pair";
} else{
    echo "Le nombre $user est impair";
}