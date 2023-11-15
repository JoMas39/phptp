<?php

//OK FINI

// Tableau pour stocker les notes saisies
$notes = [];

// Boucle while pour demander à l'utilisateur de saisir des notes
while (true) {
    $note = readline("Saisir une note ('q' pour arrêter) : ");

// Pour quitter
    if (strtolower($note) == 'q') {
        echo "Arrêt du programme.\n";
        break;
    }

// Vérifier si note est ok
    if ($note >= 0 && $note <= 20) {
        $notes[] = $note; // Ajouter la note au tableau
    } else {
        echo "Saisie invalide ! Veuillez saisir une note entre 0 et 20 (q pour arrêter) : ", "\n";
    }
}

echo "Vous avez saisi " .count($notes). " notes", "\n";
echo "Les notes saisies sont : ";
foreach ($notes as $note) {
    echo $note, " ";
}