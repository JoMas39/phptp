<?php

//Utiliser une VARIABLE GLOBALE dans une fonction
// NE JAMAIS FAIRE CA
$prenom="Jean";
function direBonjour():void{
    global $prenom;
    echo "Bonjour $prenom !";
}
direBonjour();
echo PHP_EOL;
//On définit la variable DANS la fonction


//Une fonction peut RETOURNER UN RESULTAT
//On va définir une fonction permettant de calculer et retourner la somme de 2 nombres
function additionner(int $nb1, int $nb2): int {
    //$resultat est une variable locale à la fonction
    $resultat=$nb1+$nb2;
    //On retourne le résultat
    return $resultat;
}
// On fait appel à la fonction
additionner(10,20);
//Il faut stocker le résultat dans une variable, sinon rien n'apparaît.
$resultat_addition=additionner(10,20);
echo "Le résultat est égal à : $resultat_addition";
echo PHP_EOL;
//Ou alors :
echo "Le résultat est égal à : ". additionner(10,20);
echo PHP_EOL;
//Mais on ne peut pas réutiliser le résultat de la fonction

