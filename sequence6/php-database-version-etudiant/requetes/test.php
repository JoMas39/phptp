<?php
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