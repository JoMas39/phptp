<?php
//R7
function nombreArticlesParChaqueAuteur(array $tableArticles, array $tableAuteurs): array {
    $nombreArticlesParAuteur = [];

    foreach ($tableAuteurs as $idAuteur => $auteur) {
        ["prenom" => $prenom, "nom" => $nom] = $auteur;
        $nombreArticlesParAuteur[$idAuteur] = [
            "id" => $idAuteur,
            "prenom" => $prenom,
            "nom" => $nom,
            "nombre_articles" => 0 // Initialiser le tableau avec le nombre d'articles à 0 pour chaque auteur
        ];
    }

    // Compter le nombre d'articles pour chaque auteur
    foreach ($tableArticles as $article) {
        ["id_auteur" => $idAuteur] = $article;
        $nombreArticlesParAuteur[$idAuteur]["nombre_articles"]++;
    }
    return array_values($nombreArticlesParAuteur); // Retourner les valeurs sans les clés
}