<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";
require_once "requetes.php";

/*
 * Test requête R5
 * function recupererArticlesOrdonnesParTitre(array $tableArticles, array $tableCategories): array {
    $resultats = [];

    // Créer un tableau temporaire pour stocker les articles avec le titre comme clé
    $articlesTries = [];

    foreach ($tableArticles as $idArticle => $article) {
        ["titre" => $titre, "date_creation" => $date_creation, "id_categorie" => $idCategorie] = $article;

        // Vérifier si la catégorie existe
        if (array_key_exists($idCategorie, $tableCategories)) {
            $libelleCategorie = $tableCategories[$idCategorie]["libelle"];

            // Ajouter les informations nécessaires au tableau des articles triés
            $articlesTries[$titre] = [
                "id" => $idArticle,
                "titre" => $titre,
                "date_creation" => $date_creation,
                "categorie" => $libelleCategorie
            ];
        } else {
            echo "La catégorie avec l'ID $idCategorie n'existe pas pour l'article avec l'ID $idArticle.\n";
        }
    }

    // Trier le tableau des articles par le titre
    ksort($articlesTries);

    // Ajouter les articles triés au tableau des résultats
    foreach ($articlesTries as $articleTrie) {
        $resultats[] = $articleTrie;
    }

    return $resultats;
}

// Exemple d'utilisation de la fonction R5
$resultatsArticlesOrdonnes = recupererArticlesOrdonnesParTitre($tableArticles, $tableCategories);

// Affichage des résultats R5
foreach ($resultatsArticlesOrdonnes as $resultat) {
    echo "ID: {$resultat['id']}, Titre: {$resultat['titre']}, Date de création: {$resultat['date_creation']}, Catégorie: {$resultat['categorie']}\n";
}

*/


