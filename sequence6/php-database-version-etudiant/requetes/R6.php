<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";
require_once "requetes.php";

/*
 * Test requête R6
function nombreArticlesParAuteur(array $tableArticles, int $idAuteur): int {
    $nombreArticles = 0;

    foreach ($tableArticles as $article) {
        ["id_auteur" => $auteurArticleId] = $article;

        if ($auteurArticleId === $idAuteur) {
            $nombreArticles++;
        }
    }

    return $nombreArticles;
}

// Saisie de l'utilisateur pour l'ID de l'auteur
$auteurId = (int)readline("Saisir l'id d'un auteur : ");

// Appel de la fonction R6 avec l'ID de l'auteur saisi
$nombreArticlesAuteur = nombreArticlesParAuteur($tableArticles, $auteurId);

// Affichage du résultat R6
echo "Le nombre d'articles postés par l'auteur avec l'ID $auteurId est : $nombreArticlesAuteur\n";

*/

$auteurId = readline("Saisir l'id d'un auteur : ");

