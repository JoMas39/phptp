<?php

// Saisi
$nombrePhotocop=readline("Veuillez indiquer votre nombre de photocopies : ");

//Formules
$dix=$nombrePhotocop*0.3;
$vingt=$nombrePhotocop*0.25;
$supVingt=$nombrePhotocop*0.2;

//Calcul
if ($nombrePhotocop<=10) {
 $prix=$dix;
 echo "- de 10";
 echo "Vous paierez $prix euros.";
 echo PHP_EOL;
} elseif ($nombrePhotocop>= 10 || $nombrePhotocop<=30) {
    echo "entre 10 et 30";
    $prix=((($nombrePhotocop-10)*$vingt)+10*0.3);
    echo "Vous paierez $prix euros.";
    echo PHP_EOL;
} else {
    echo "sup 30";
    $prix=((($nombrePhotocop-30)*$supVingt)+10*0.3+20*0.25);
    echo "Vous paierez $prix euros.";
    echo PHP_EOL;
}


$reduction=$prix*0.90;


if ($prix>50) {
echo "Vous avez doit à une réduction de 10%. Vous paierez donc $reduction euros.";
} else {
exit();
}
