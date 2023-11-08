<?php

//Déterminer si un nombre est pair ou impaire

$nombre=readline("Veuillez choisir un nombre :");
echo PHP_EOL;
echo "Vous avez choisi le nombre $nombre.";
echo PHP_EOL;

// On utilise la division avec reste pour avoir un reste à 0
//C'est le modulo (%) qui permet de récupérer le reste de la division.
$modulo=$nombre%2;


if($modulo==0){
    echo "Le nombre $nombre est pair";
}
else{
    echo "Le nombre $nombre est impair";
}

// On peut faire plus simple avec if($nombre%2==0) sans rajouter la variable modulo
// Le modulo permet de savoir si le nombre est divisible par la valeur qui suit le modulo. Ex : nombre divisable par 5 -> %5