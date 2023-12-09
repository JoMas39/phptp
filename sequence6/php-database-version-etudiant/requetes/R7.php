<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";
require_once "requetes.php";

/*
 * Test requête R7
function nombreArticlesParChaqueAuteur(array $tableArticles, array $tableAuteurs): array {
    $nombreArticlesParAuteur = [];

    // Initialiser le tableau avec le nombre d'articles à 0 pour chaque auteur
    foreach ($tableAuteurs as $idAuteur => $auteur) {
        ["prenom" => $prenom, "nom" => $nom] = $auteur;
        $nombreArticlesParAuteur[$idAuteur] = [
            "id" => $idAuteur,
            "prenom" => $prenom,
            "nom" => $nom,
            "nombre_articles" => 0
        ];
    }

    // Compter le nombre d'articles pour chaque auteur
    foreach ($tableArticles as $article) {
        ["id_auteur" => $idAuteur] = $article;

        if (array_key_exists($idAuteur, $nombreArticlesParAuteur)) {
            $nombreArticlesParAuteur[$idAuteur]["nombre_articles"]++;
        }
    }

    return array_values($nombreArticlesParAuteur); // Retourner les valeurs sans les clés
}

// Exemple d'utilisation de la fonction R7
$resultatsNombreArticlesParAuteur = nombreArticlesParChaqueAuteur($tableArticles, $tableAuteurs);

// Affichage des résultats R7
foreach ($resultatsNombreArticlesParAuteur as $resultat) {
    echo "ID: {$resultat['id']}, Prénom: {$resultat['prenom']}, Nom: {$resultat['nom']}, Nombre d'articles: {$resultat['nombre_articles']}\n";
}

*/

