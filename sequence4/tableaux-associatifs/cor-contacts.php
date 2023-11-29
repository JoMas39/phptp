<?php

$contacts = [
    'Alice' => '0123456789',
    'Bob' => '0234567890',
    'Charlie' => '0345678901'
];

// Demande à l'utilisateur d'entrer un nom pour rechercher le numéro de téléphone
$nom = readline("Entrer le nom à vérifier: ");

// Vérification de l'existence du nom dans le tableau
if (array_key_exists($nom, $contacts)) {
    echo "Le numéro de téléphone de $nom est: " . $contacts[$nom] . "\n";
} else {
    echo "Le nom $nom n'existe pas dans le tableau des contacts.\n";
}