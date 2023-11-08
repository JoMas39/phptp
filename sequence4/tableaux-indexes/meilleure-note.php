<?php
//Ecrire un programme meilleure-note.php permettant de trouver
//et afficher la note la plus haute obtenue par l'élève
//Les notes sont les suivantes 10 12,5 14 7 15 9,5 et 8
//Vous proposerez 2 versions différentes du programme :
// Une 1ère version utilisant une boucle
// Une 2nde version utilisant une fonction proposée par PHP

$notes = [10, 12.5, 14, 7, 15, 9.5, 8];
echo "Deuxième version (fonction) : La meilleure note est " .max($notes), "\n";

foreach ($notes as $note) {
    echo "Première version (boucle) : La meilleure note est ". max($notes), "\n";
}