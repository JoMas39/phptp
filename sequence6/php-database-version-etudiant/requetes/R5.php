<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";
require_once "requetes.php";

/*
 * Test requête R5
 */
$resultatsArticlesOrdonnes = recupererArticlesOrdonnesParTitre($tableArticles, $tableCategories);
print_r($resultatsArticlesOrdonnes);



/*
// Affichage des résultats R5
foreach ($resultatsArticlesOrdonnes as $resultat) {
    echo "ID: {$resultat['id']}, Titre: {$resultat['titre']}, Date de création: {$resultat['date_creation']}, Catégorie: {$resultat['categorie']}\n";
}

*/


