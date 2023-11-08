<?php
//Description
$eau=1.2;
$soda=3;
$cafe=2;

//Présentation des options
print " Distributeur de boissons :
1. Eau - 1,20€
2. Soda - 3€
3. Café - 2€";
echo PHP_EOL;

//Sélection de la boisson
$choix=readline("Veuillez choisir votre boisson (1,2 ou 3) : ");
while ($choix<1 || $choix >3){
    $choix=readline("Sélection invalide. Veuillez choisir votre boisson (1,2 ou 3) : ");
    echo PHP_EOL;
}

//Afficher le choix de l'utilisateur
if ($choix==1) {
    print "Vous avez choisi de l'eau.";
} elseif ($choix==2) {
    print "Vous avez choisi du soda.";
} elseif ($choix==3) {
    print "Vous avez choisi du café.";
}
echo PHP_EOL;

//Afficher le tarif
if ($choix==1) {
    $tarif=1.2;
} elseif ($choix==2) {
    $tarif=3;
} elseif ($choix==3) {
    $tarif=2;
}
echo "Vous devez payer $tarif euros";
echo PHP_EOL;

//Procéder au paiement
$argent=readline("Il vous reste à payer $tarif €. Veuillez insérer de l'argent (entrez un montant en euros) : ");

$solde=$tarif-$argent;

$paiement=0;

while ($solde > 0) {
    $paiement=$paiement+$argent;
    $solde=$tarif-$paiement;
    $argent=readline("Il vous reste à payer $solde €. Veuillez insérer de l'argent (entrez un montant en euros) : ");
    echo PHP_EOL;

    if ($solde<0){
        $monnaie=$solde-$tarif;
        print "Voici votre monnaie : $monnaie €";
        echo PHP_EOL;
    }
}
print "Voici votre boisson. Merci !";


