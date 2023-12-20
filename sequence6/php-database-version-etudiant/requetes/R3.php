<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";
require_once "requetes.php";


$resultatsTousLesArticles = recupererTousLesArticles($tableArticles, $tableCategories);
foreach ($resultatsTousLesArticles as $resultat) {
    echo "ID: {$resultat['id']}, Titre: {$resultat['titre']}, Contenu: {$resultat['contenu']}, Date de création: {$resultat['date_creation']}, Catégorie: {$resultat['categorie']}\n";
}