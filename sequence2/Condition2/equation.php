<?php

//Résoudre ax2+bx+c=0

//Saisir chaque coefficient
$a=readline("Veuillez saisir le coefficient a :");
$b=readline("Veuillez saisir le coefficient b :");
$c=readline("Veuillez saisir le coefficient c :");

//Afficher l'équation à résoude
echo "Résoultion de l'équation" .$a."*x^2+".$b."*x+".$c."=0";
echo PHP_EOL;


//Calculer le delta
$delta=pow($b,2)-4*($a*$c);
echo "Le delta est $delta";
echo PHP_EOL;

//Début des conditions
if ($delta>0) {
    $x1=(-$b-sqrt($delta))/(2*$a);
    $x2=(-$b+sqrt($delta))/(2*$a);
    echo "cette équation admet deux solutions distinctes : x1= $x1 et x2 = $x2";

} elseif ($delta=0) {
    $x=-$b/(2*$a);
    echo "cette équation admet une solution unique : x= $x";

 } else {
    echo "cette équation n’admet pas de solutions réelles.";
}
