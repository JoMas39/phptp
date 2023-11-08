<?php

//Saisie
$minutes=readline("Veuillez le nombre de minutes d'appels utilisés: ");
$sms=readline("Veuillez le nombre de minutes de SMS envoyés : ");
$quantiteDonnees=readline("Veuillez  la quantité de données consommées en Go : ");

//Calcul du total pour chaque valeur
$totalMinutes=$minutes*0.1;
$totalSms=$sms*0.01;
$totalGiga=$quantiteDonnees*10;

//Total des totaux
$totalTotal=$totalGiga+$totalSms+$totalMinutes;

if ($minutes<0 || $sms<0 || $quantiteDonnees<0)  {
    echo "Erreur : vous avez saisi un nombre négatif. Veuillez recommencer." ;
    echo PHP_EOL;
}

echo "Vous paierez 10 centimes la minute, donc $totalMinutes euros pour $minutes minutes.";
echo PHP_EOL;

echo "Vous paierez 1 centime le SMS, donc $totalSms euros pour $sms SMS.";
echo PHP_EOL;

echo "Vous paierez 10 euros le giga, donc $totalGiga euros pour $quantiteDonnees gigas.";
echo PHP_EOL;

echo "Vous paierez donc un total de $totalTotal euros en tout.";
echo PHP_EOL;

// Ok ça marche.