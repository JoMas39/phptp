<?php

//Par exemple, avec un décalage de 3, "A" devient "D", "B" devient "E", "X" devient "A", etc.
//Assurez-vous que le programme gère à la fois les lettres majuscules et minuscules.

//Alphabet majuscules et minuscules
$alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

// Chaine
$chaine=readline("Saisissez une phrase : ");

//Ne pas compter certains caractères
$caracteres = array(' ', '.', ',', '!','?',':');
$chaineSansCaracteres = str_replace($caracteres, '', $chaine);

//Compter les lettres
$longueur=strlen($chaineSansCaracteres);
echo "Il y a $longueur caractères dans cette phrase.";

//Décalage
$decalage=readline("Saisissez un nombre entre 1 et 26 : ");
while($decalage<1||$decalage>26){
    $decalage=readline("Saisissez un nombre entre 1 et 26 : ");
}
echo "Vous avez choisi $decalage";

//Boucle
for ($i = 0; $i < $longueur; $i++) {

}