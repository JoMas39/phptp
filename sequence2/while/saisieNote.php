<?php

$note=readline("Veuillez saisir une note : ");

while ($note>20){
    echo "La note saisie est incorrecte !";
    echo PHP_EOL;
    $note=readline("Veuillez saisir une note : ");
}

echo PHP_EOL;
echo "La note saisie est correcte !";

//OK CA MARCHE