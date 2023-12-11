<?php
$livre="Les Misérables:Victor Hugo:1862:Roman historique:978-0-679-60129-2";

// 1. Extraire et afficher chacune des informations du livre (Titre, auteur, date, genre, ISBN).
//On utilise la fonction explode
$livreTab=explode(':', $livre);
foreach ($livreTab as $info){
    echo $info;
}
echo PHP_EOL;

//2. Utiliser la fonction list()
list($titre,$auteur,$date,$genre,$isbn) = explode(':', $livre);
// On récupère chaque élément du tableau dans des variables différentes.
echo "$titre $auteur $date $genre $isbn";
echo PHP_EOL;

// 3. Utiliser le destructuring (à partir de PHP 7.1)
[$titre,$auteur,$date,$genre,$isbn] = explode(':', $livre);
echo "$titre $auteur $date $genre $isbn";
echo PHP_EOL;

//4. Afficher le titre et la date avec explode.
$livreTab=explode(':', $livre);
// Positions : 0 et 2
echo $livreTab[0]," ",$livreTab[2];
// Problème : on ne sait pas à quoi correspondent ces positions.
echo PHP_EOL;

//5. Afficher le titre et la date avec list.
list($titre,,$date)=$livreTab=explode(':', $livre);
// "  ,,  " permet de sauter la position 1. On a juste besoin de connaître l'ordre des éléments dans le tableau.
echo "$titre $date";
echo PHP_EOL;

//6. Afficher le titre et la date avec destructuring.
[$titre,,$date]=$livreTab=explode(':', $livre);
echo "$titre $date";
echo PHP_EOL;

// Afficher l'auteur du livre
[,$auteur]=$livreTab=explode(':', $livre);
echo "$auteur";
echo PHP_EOL;

// Afficher l'ISBN du livre
[,,,,$isbn]=$livreTab=explode(':', $livre);
echo "$isbn";
echo PHP_EOL;
echo PHP_EOL;