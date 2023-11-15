<?php

//OK FINI

// Définir tableau Celsius
$temp = [12,18,9,8,20,15,6];
echo "Voici des températures en Celsius", "\n";
//Afficher le tableau et les températures
print_r($temp);
echo PHP_EOL;

// Définir tableau Fahrenheit
$far =[];

//Passer au Fahrenheit
echo "Et voici ces températures en Fahrenheit : ";
foreach ($temp as $saisie) {
    $far[]=($saisie-32)/1.8;
}

print_r($far);