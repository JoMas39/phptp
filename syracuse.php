<?php
//génère les 20 premiers termes de la suite de Syracuse d'un nombre donné.

//La règle est la suivante :
// à partir d’un nombre entier N
//on affiche le nombre
// puis on applique une certaine opération pour obtenir le nombre suivant de la suite.

// L’opération est la suivante :
// si N est pair, on divise par 2;
// si N est impair, on multiplie par 3 et on ajoute 1.

$n=readline("Saisissez un nombre : ");
echo "Les 20 premiers termes de la suite de Syracuse pour N=$n sont : ";
echo PHP_EOL;

for ($suite=0;$suite<=19;$suite++) {
    if ($n%2==0) {
        $n=$n / 2;
        echo $n. " ";
    } else {
        $n=3*$n+1;
        echo $n. " ";
    }
}

// CA MARCHE