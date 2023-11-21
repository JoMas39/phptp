<?php
// Ecrire un programme recherche-equipe.php permettant de
//rechercher si une équipe sera présente à la prochaine coupe
//du monde de football
//Votre programme doit demander à l'utilisateur de saisir une
//équipe

$equipes = ['France','Brésil','Argentine','Espagne','Sénégal','Australie','Belgique'];
$arrayLow=array_map('strtolower', $equipes);

$user=readline("Veuillez choisir une équipe : ");
$choix_user=(strtolower($user));

// première option avec une fonction de PHP
if (in_array($choix_user,$arrayLow)) {
    echo ucfirst($choix_user). " sera présente à la prochaine coupe du monde !";
}
    else{
    echo ucfirst($choix_user). " ne sera pas présente à la prochaine coupe du monde !";
}

// Deuxième option avec une boucle
    foreach ($equipes as $equipe){

    }