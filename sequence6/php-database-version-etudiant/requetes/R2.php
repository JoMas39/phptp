<?php

require_once "../base-de-donnees/tableArticle.php";
require_once "../base-de-donnees/tableAuteur.php";
require_once "../base-de-donnees/tableCategorie.php";
require_once "requetes.php";


// Saisie de l'utilisateur pour l'ID de la catégorie
$categorieId = (int)readline("Saisir l'id d'une catégorie : ");

// Exemple d'utilisation de la fonction avec la catégorie saisie par l'utilisateur
$resultatsCategorieUtilisateur = recupererArticlesCategorie($tableArticles, $tableCategories, $categorieId);

// Affichage des résultats
foreach ($resultatsCategorieUtilisateur as $resultat) {
    echo "ID: {$resultat['id']}, Titre: {$resultat['titre']}, Contenu: {$resultat['contenu']}, Date de création: {$resultat['date_creation']}, Catégorie: {$resultat['categorie']}\n";
}
