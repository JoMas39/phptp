<?php

// Définit une fonction permettant de déterminer si un nombre passé en paramètre est pair ou impair
//Demande à l'user de saisir un nombre
//Afficher si le nombre saisi est pair ou impair

function estPair(int $nb1): bool{
    if ($nb1 % 2 == 0){
        return true;
    } else{
        return false;
    }
}

//Appel de la fonction
$user=readline("Veuillez saisir un nombre : ");
$resultat=estPair($user);
if ($resultat==true){
    echo "Le nombre $user est pair";
} else{
    echo "Le nombre $user est impair";
}



int($user);