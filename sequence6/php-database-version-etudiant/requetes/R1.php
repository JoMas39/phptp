<?php

require_once "../base-de-donnees/tableArticle.php";
require_once "../base-de-donnees/tableAuteur.php";
require_once "../base-de-donnees/tableCategorie.php";
require_once "requetes.php";

/*
 * Test requête R1
*/


echo "...................................................................................... \n";

// Appel de la fonction
$resultatsArticlesActifs = rechercherArticlesActifs($tableArticles);

// Affichage des résultats
foreach ($resultatsArticlesActifs as $resultat) {
    echo "ID: {$resultat['id']}, Titre: {$resultat['titre']}, Contenu: {$resultat['contenu']}, Date de création: {$resultat['date_creation']}\n";
    echo PHP_EOL;
}

echo "......................................................................................";
