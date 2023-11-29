<?php
//Créez une fonction genererAcronyme qui prend une phrase et renvoie l'acronyme correspondant en majuscules.
//Par exemple, pour "As Soon As Possible", elle renvoie "ASAP".

//Définir fonction
require 'tp-fonctions.php';

//Saisir la phrase
$phrase=readline("Veuillez écrire une phrase : ");

//Appeler la fonction
echo "Voici l'acronyme : ". genererAcronyme($phrase);

