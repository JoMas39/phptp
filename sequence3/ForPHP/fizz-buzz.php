<?php
//Ecrire un programme fizz-buzz.php permettant d'afficher les nombre de 1 à 30 en appliquant les règles suivantes :
//Si le nombre est un multiple de 3 on affiche Fizz
//Si le nombre est un multiple de 5 on affiche Buzz
//Si le nombre est un multiple de 15 on affiche FizzBuzz

for ($nombre=1;$nombre<=30 ;$nombre+=1) {
    if ($nombre % 15 == 0) {
        echo "FizzBuzz ";
    } elseif ($nombre % 5 == 0) {
        echo "Buzz ";
    } elseif ($nombre % 3 == 0) {
            echo "Fizz ";
    }
    else{
        echo $nombre. " ";
    }
}

// CA MARCHE