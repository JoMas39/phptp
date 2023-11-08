<?php
echo "1. Jouer 
2. Voir les résultats.
3. Voir les résultats d'un jour.
4. Voir les résultats d'un joueur.
5. Quitter.";
echo PHP_EOL;
$menu = readline("Votre choix : 1, 2, 3, 4 ou 5 :");

while ($menu!=5){
if ($menu ==1){
echo "Jouer ! \n";
}
elseif ($menu ==2){
echo "Voir les résultats. \n";
}
elseif ($menu ==3){
echo "Voir les résultats d'un jour. \n";
}
elseif ($menu ==4){
echo "Voir les résultats d'un joueur. \n";
}
elseif ($menu ==5){
echo "Quitter. \n";
}
}