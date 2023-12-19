<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";
require_once "requetes.php";

/*
 * Test requête R3
function recupererTousLesArticles(array $tableArticles, array $tableCategories): array {
    $resultats = [];

    foreach ($tableArticles as $idArticle => $article) {
        ["titre" => $titre, "contenu" => $contenu, "date_creation" => $date_creation, "id_categorie" => $idCategorie] = $article;

        // Vérifier si la catégorie existe
        if (array_key_exists($idCategorie, $tableCategories)) {
            $nomCategorie = $tableCategories[$idCategorie]["libelle"];

            // Ajouter les informations nécessaires au tableau des résultats
            $resultats[] = [
                "id" => $idArticle,
                "titre" => $titre,
                "contenu" => $contenu,
                "date_creation" => $date_creation,
                "categorie" => $nomCategorie
            ];
        } else {
            echo "La catégorie avec l'ID $idCategorie n'existe pas pour l'article avec l'ID $idArticle.\n";
        }
    }
    return $resultats;
}

// Exemple d'utilisation de la fonction
$resultatsTousLesArticles = recupererTousLesArticles($tableArticles, $tableCategories);

// Affichage des résultats
foreach ($resultatsTousLesArticles as $resultat) {
    echo "ID: {$resultat['id']}, Titre: {$resultat['titre']}, Contenu: {$resultat['contenu']}, Date de création: {$resultat['date_creation']}, Catégorie: {$resultat['categorie']}\n";
}

*/

foreach ($tableArticles as $table){
    ["titre"=>$titre,"contenu"=>$contenu, "date_creation"=>$date_creation, "actif"=>$actif, "id_auteur"=>$idAuteur,"id_categorie"=>$idCategorie]=$table;
    foreach ($tableCategories as $categorie){
        ["libelle"=>$libelle] = $categorie;
        echo "$titre,$contenu, $date_creation, $libelle \n";
        echo PHP_EOL;
    }
}
// PB : il répète chaque entrée en lui associant toutes les catégories existantes.
// Il répète le nombre de lignes