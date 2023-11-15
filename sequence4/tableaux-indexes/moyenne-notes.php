<?php
//Ecrire un programme moyenne-notes.php permettant de calculer
//et afficher la moyenne des notes d'un étudiant de BTS SIO à
//son examen final.
//Les notes sont les suivantes 10 12,5 14 7 15 9,5 et 8

// OK FINI

$notes = [10, 12, 5, 14, 7, 15, 9, 5, 8];
$somme=array_sum($notes);
$diviseur=count($notes);
$moyenne= $somme/$diviseur;

echo "La moyenne de l'étudiant est :" .round($moyenne,2) , "\n";
