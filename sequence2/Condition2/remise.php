<?php

$fondRouge = "\033[41m";
$normal = "\033[0m";

$prix=readline("Veuillez saisir un prix en euros :");

$remise5=$prix*0.95;
$montantRemise5=$prix-$remise5;

$remise10=$prix*0.90;
$montantRemise10=$prix-$remise10;

$remise20=$prix*0.80;
$montantRemise20=$prix-$remise20;

if ($prix>1000 && $prix<5000) {
    echo "La remise de 10% soit " .number_format($montantRemise10,2, ',', ' '). " euros s'applique sur le prix de l'article. ";
    echo PHP_EOL;
    echo "Le montant de l'article après remise est de " .number_format($remise10,2, ',', ' '). " euros.";
    echo PHP_EOL;

} elseif ($prix>=5000) {
    echo "La remise de 20% soit " .number_format($montantRemise20,2, ',', ' '). " euros s'applique sur le prix de l'article. ";
    echo PHP_EOL;
    echo "Le montant de l'article après remise est de " .number_format($remise20,2, ',', ' '). " euros.";
    echo PHP_EOL;

} else {
    echo "La remise de 5% soit " .number_format($montantRemise5,2, ',', ' '). " euros s'applique sur le prix de l'article. ";
    echo PHP_EOL;
    echo "Le montant de l'article après remise est de " .number_format($remise5,2, ',', ' '). " euros.";
}

// Il manque juste le fond rouge sur les nombres