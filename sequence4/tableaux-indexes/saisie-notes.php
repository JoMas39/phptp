<?php

// crire un programme saisie-notes.php demandant à l'utilisateur
//de saisir des notes (comprises entre 0 et 20) puis d'afficher le
//nombre de notes saisies ainsi que les notes saisies.

$note = readline("veuillez saisir une note entre 0 et 20 (q pour arrêter) :");

while ($note!="q"){
    $note = readline("veuillez saisir une note entre 0 et 20 (q pour arrêter) :");
    if($note <0 || $note>20){
        echo "La note saisie est incorrecte";
    }
}