<?php

$prenom=readline("Veuillez saisir votre prénom :");
$nom=readline("Veuillez saisir votre nom :");
$initiale1=strtoupper(substr($prenom,0,1));
$initiale2=strtoupper(substr($nom,0,1));
echo "Vos initiales sont :".$initiale1 . $initiale2;

// Ok ça marche (Merci Antoine!)