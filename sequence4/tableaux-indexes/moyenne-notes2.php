<?php
//Modifier le programme moyenne-notes.php afin d'afficher
//une appréciation en fonction des règles suivantes :
//Moyenne                           Appréciation
//< 10                              Vous n'avez pas votre diplôme
//Entre 10 et 12 (exclu)            Mention passable
//Entre 12 et 14 (exclu)            Mention assez bien
//Entre 14 et 16 (exclu)            Mention bien
//>=16                              Mention très bien

// OK FINI

$notes = [10, 12, 5, 14, 7, 15, 9, 5, 8];
$somme=array_sum($notes);
$diviseur=count($notes);
$moyenne= $somme/$diviseur;

echo "La moyenne de l'étudiant est :" .round($moyenne,2) , "\n";

if ($moyenne>=16){
    echo "Mention très bien.";
}

elseif ($moyenne >= 14 && $moyenne < 16){
    echo "Mention bien.";
}

elseif ($moyenne >= 12 && $moyenne < 14){
    echo "Mention assez bien.";
}

elseif ($moyenne >= 10 && $moyenne < 12){
    echo "Mention passable.";
}

elseif ($moyenne<10){
    echo "Vous n'avez pas votre diplôme.";
}