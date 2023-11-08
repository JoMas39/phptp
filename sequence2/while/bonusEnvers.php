<?php
// Afficher la phrase à l'envers

$phrase=readline("Veuillez saisir une phrase : ");
echo "La phrase saisie est '$phrase' ";
echo PHP_EOL;

$lettres=strlen($phrase);
echo "Il y a $lettres caractères dans cette phrase";
echo PHP_EOL;

$envers=strrev($phrase);
echo "Une fois mise à l'envers, la phrase donne :";
echo $envers;
echo PHP_EOL;


