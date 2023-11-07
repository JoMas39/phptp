<?php

//INPUT
$montant=readline("Veuillez saisir le montant de votre emprunt :");
$taux=readline("Veuillez saisir le taux de votre emprunt :");
$durée=readline("Veuillez saisir la durée (en années) de votre emprunt :");

echo PHP_EOL;

//FORMULES
$mois=$durée*12;
$tauxPourcentage=($taux/100)+1;

// durée * 12, pour convertir en nombre de mois
// formule = (montant*taux)/mois

echo "Votre emprunt sera remboursé au bout de $mois mois.";
echo PHP_EOL;
echo "Le taux sera de $tauxPourcentage.";
echo PHP_EOL;

//Calcul
$calcul=($montant*$tauxPourcentage)/$mois;

//Affichage utilisateur
echo "Vous rembourserez $calcul chaque mois.";
echo PHP_EOL;

//Calcul du coût total de l'emprunt
$total=($montant*$tauxPourcentage)*$mois;
echo "Votre emprunt vous coûtera $total euros au total.";

// ok ça marche
