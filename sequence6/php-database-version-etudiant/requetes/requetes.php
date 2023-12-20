<?php

/********************************************************************
 * Ce fichier PHP contient la liste des fonctions permettant de
 * simuler les requêtes dans la base de données
 *******************************************************************/
/*
 _______________________________________________________________________________________________________________________
 */
/* Requête R1
 * Récupérer les articles actifs (articles à afficher)
 * On souhaite récupérer l'id, le titre, le contenu et la date de création de chaque article
*/
function rechercherArticlesActifs(array $tableArticle): array {
    $resultats = [];
    foreach ($tableArticle as $articleId => $article) {
        ["titre" => $titre, "contenu" => $contenu, "date_creation" => $date_creation, "actif" => $actif] = $article;
        // Condition true ok
        if ($actif == true) {
            // Infos nécessaires
            $resultats[] = [
                "id" => $articleId,
                "titre" => $titre,
                "contenu" => $contenu,
                "date_creation" => $date_creation,
            ];
        }
    }
    return $resultats;
}
/*
 _______________________________________________________________________________________________________________________
 */


/*
 _______________________________________________________________________________________________________________________
 */
/* Requête R2
 * Récupérer les articles d'une catégorie donnée
 * On souhaite récupérer l'id, le titre, le contenu et la date de création de chaque article
*/
// PLACER ICI VOTRE FONCTION
function recupererArticlesCategorie(array $tableArticles, array $tableCategories, int $categorieId): array {
    $resultats = [];

    // Vérifier si la catégorie existe
    if (array_key_exists($categorieId, $tableCategories)) {
        $libelleCategorie = $tableCategories[$categorieId]["libelle"];

        foreach ($tableArticles as $idArticle => $article) {
            ["titre" => $titre, "contenu" => $contenu, "date_creation" => $date_creation, "actif" => $actif, "id_auteur" => $idAuteur, "id_categorie" => $idCategorie] = $article;

            if ($categorieId == $idCategorie) {
                $resultats[] = [
                    "id" => $idArticle,
                    "titre" => $titre,
                    "contenu" => $contenu,
                    "date_creation" => $date_creation,
                    "categorie" => $libelleCategorie
                ];
            }
        }
    } else {
        echo "La catégorie avec l'ID $categorieId n'existe pas.";
    }
    return $resultats;
}
/*
 _______________________________________________________________________________________________________________________
 */


/*
 _______________________________________________________________________________________________________________________
 */
/* Requête R3
 * Récupérer l'ensemble des articles
 * On souhaite récupérer l'id, le titre, le contenu, la date de création et le nom de la catégorie de chaque article
*/
// PLACER ICI VOTRE FONCTION
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




/* Requête R4
 * Récupérer les articles dont la date de création est supérieure à une date donnée
 * On souhaite récupérer l'id, le titre, le contenu, la date de création, le prénom et le nom de l'auteur de
 * chaque article
*/
// PLACER ICI VOTRE FONCTION


/* Requête R5
 * Récupérer les articles à afficher ordonnés sur le titre (ordre alphabétique)
 * On souhaite récupérer l'id, le titre, la date de création et le libellé de la catégorie de chaque article
*/
// PLACER ICI VOTRE FONCTION


/* Requête R6
 * Récupérer le nombre d'articles postés par un auteur donné (id_auteur)
*/
// PLACER ICI VOTRE FONCTION


/* Requête R7
 * Récupérer le nombre d'articles postés par chaque auteur
 * On souhaite récupérer l'id, le prénom, le nom et le nombre d'articles ce chaque auteur
*/
// PLACER ICI VOTRE FONCTION
