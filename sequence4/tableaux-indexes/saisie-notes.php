<?php
// crire un programme saisie-notes.php demandant à l'utilisateur
//de saisir des notes (comprises entre 0 et 20) puis d'afficher le
//nombre de notes saisies ainsi que les notes saisies.

$notes = [];
for ($i=0; $i !="q" ; $i++) {

    $notes[$i] = readline("veuillez saisir une note entre 0 et 20 (q pour arrêter) : ");

    if ($notes[$i]=="q"){
        echo "Arrêt du programme", "\n";
        break;
    }

    elseif($notes[$i] <0 || $notes[$i]>20){
        echo "La note saisie est incorrecte", "\n";
    }
}
echo "Vous avez saisi " .count($notes). " notes", "\n";
echo "Les notes saisies sont : ";
foreach ($notes as $note) {
    echo $note, " ";
}