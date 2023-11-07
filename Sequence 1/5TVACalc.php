?php
$prixHT = readline("Saisir un prix HT : ");
$tauxTVA = readline("Saisir un taux de TVA (en %) : ");
$prixTTC = round($prixHT*(1+($tauxTVA/100)),2);
echo "Le prix TTC est de : $prixTTC";