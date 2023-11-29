<?php

$emails = [
    'dupond' => 'dupond@free.fr',
    'durand' => 'durand@gmail.com',
    'martin' => 'martin@free.fr',
    'richard' => 'richard@laposte.net',
    'thomas' => 'thomas@gmail.fr',
];

// Affichage de la liste des emails
foreach($emails as $nom => $email) {
    echo "$nom : $email\n";
}

// Demande à l'utilisateur d'entrer un domaine
// Recherche des noms associés aux emails du domaine
$domaine = readline("Saisir un domaine : ");
$noms = [];
foreach($emails as $nom => $email) {
    if (strpos($email,$domaine)) {
        $noms[] = $nom;
    }
}

// Affichage des noms associés aux emails du domaine
if (count($noms) > 0) {
    echo "Les noms associés aux emails du domaine $domaine sont : ";
    foreach($noms as $nom) {
        echo "$nom ";
    }
    echo "\n";
} else {
    echo "Aucun nom associé aux emails du domaine $domaine.\n";
}
