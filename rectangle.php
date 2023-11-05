<?php
//Ecrire un programme rectangle.php permettant de
// dessiner un rectangle avec des "*" dont
// la largeur et la hauteur sont demandées à l'utilisateur

$largeur = readline("Largeur du rectangle : : ");
$hauteur = readline("Hauteur du rectangle : ");

for ($ligne=1;$ligne<=$largeur;$ligne++){
    $symbole="";

    for ($colonne = 1; $colonne <= $largeur; $colonne++) {
    $symbole .= "*";
    }

    echo $symbole . "\n";
}


// CA MARCHE