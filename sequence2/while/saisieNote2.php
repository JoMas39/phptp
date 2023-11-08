<?php

$note=readline("Veuillez saisir une note entre 0 et 20 : ");

while ($note<0 or $note>20){
    echo "La note saisie est incorrecte !";
    echo PHP_EOL;
    $note=readline("Veuillez saisir une note : ");
}

echo PHP_EOL;
echo "La note saisie est correcte !";

//OK CA MARCHE