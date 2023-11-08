<?php

$age=readline("Saisir votre âge :");
$sexe=readline("Saisir votre sexe (M) ou (F) :");

echo "Vous avez $age ans et votre sexe est $sexe";
echo PHP_EOL;



if ($sexe=="M" && $age>22) {
    echo "Vous devez payer une surprime";
} elseif ($sexe=="F" && $age>=20 && $age<30) {
    echo "Vous devez payer une surprime";
} else {
    echo "Vous ne payez aucune surprime";
}
