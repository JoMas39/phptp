<?php


$resultats = rechercherArticlesActifs($tableArticles);
foreach ($tableArticles as $articleId => $article) {
    ["titre" => $titre, "contenu" => $contenu, "date_creation" => $date_creation, "actif" => $actif] = $article;
    if ($actif == true) {
        echo "$articleId, $titre, $contenu, $date_creation, $actif \n";
        echo PHP_EOL;
    }
}
print_r($resultats);