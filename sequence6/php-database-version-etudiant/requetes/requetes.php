<?php
/********************************************************************
 * Ce fichier PHP contient la liste des fonctions permettant de
 * simuler les requêtes dans la base de données
 *******************************************************************/
/*
 _______________________________________________________________________________________________________________________
 */
/*                                                      Requête R1
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
/*                                                  Requête R2
 * Récupérer les articles d'une catégorie donnée
 * On souhaite récupérer l'id, le titre, le contenu et la date de création de chaque article
*/
// PLACER ICI VOTRE FONCTION
function recupererArticlesCategorie(array $tableArticles, array $tableCategories, int $categorieId): array {
    $resultats = [];

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
/*                                              Requête R3
 * Récupérer l'ensemble des articles
 * On souhaite récupérer l'id, le titre, le contenu, la date de création et le nom de la catégorie de chaque article
*/
// PLACER ICI VOTRE FONCTION
function recupererTousLesArticles(array $tableArticles, array $tableCategories): array {
    $resultats = [];
    foreach ($tableArticles as $idArticle => $article) {
        ["titre" => $titre, "contenu" => $contenu, "date_creation" => $date_creation, "id_categorie" => $idCategorie] = $article;
            $nomCategorie = $tableCategories[$idCategorie]["libelle"];
            $resultats[] = [
                "id" => $idArticle,
                "titre" => $titre,
                "contenu" => $contenu,
                "date_creation" => $date_creation,
                "categorie" => $nomCategorie
            ];
    }
    return $resultats;
}
/*
 _______________________________________________________________________________________________________________________
 */



/*
 _______________________________________________________________________________________________________________________
 */
/*                                              Requête R4
 * Récupérer les articles dont la date de création est supérieure à une date donnée
 * On souhaite récupérer l'id, le titre, le contenu, la date de création, le prénom et le nom de l'auteur de
 * chaque article
*/
// PLACER ICI VOTRE FONCTION
function recupererArticlesApresDate(array $tableArticles, array $tableAuteurs, string $dateLimite): array {
    $resultats = [];
    foreach ($tableArticles as $idArticle => $article) {
        ["titre" => $titre, "contenu" => $contenu, "date_creation" => $date_creation, "id_auteur" => $idAuteur] = $article;
        if (strtotime($date_creation) > strtotime($dateLimite)) {
            $nomAuteur = $tableAuteurs[$idAuteur]["prenom"] . " " . $tableAuteurs[$idAuteur]["nom"];
            $resultats[] = [
                "id" => $idArticle,
                "titre" => $titre,
                "contenu" => $contenu,
                "date_creation" => $date_creation,
                "auteur" => $nomAuteur
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
/*                                              Requête R5
 * Récupérer les articles à afficher ordonnés sur le titre (ordre alphabétique)
 * On souhaite récupérer l'id, le titre, la date de création et le libellé de la catégorie de chaque article
*/
// PLACER ICI VOTRE FONCTION
function recupererArticlesOrdonnesParTitre(array $tableArticles, array $tableCategories): array {
    $resultats = [];

    // Tableau temporaire pour stocker les articles avec le titre comme clé
    $articlesTries = [];

    foreach ($tableArticles as $idArticle => $article) {
        ["titre" => $titre, "date_creation" => $date_creation, "id_categorie" => $idCategorie] = $article;

        $libelleCategorie = $tableCategories[$idCategorie]["libelle"];

        // Ajouter les infos au tableau des articles triés
        $articlesTries[$titre] = [
            "id" => $idArticle,
            "titre" => $titre,
            "date_creation" => $date_creation,
            "categorie" => $libelleCategorie
        ];
    }


    // Là on trie le tableau des articles par le titre
    ksort($articlesTries);


    // Là on ajoute les articles triés au tableau des résultats
    foreach ($articlesTries as $articleTrie) {
        $resultats[] = $articleTrie;
    }

    return $resultats;
}
/*
 _______________________________________________________________________________________________________________________
 */



/*
 _______________________________________________________________________________________________________________________
 */
/*                                              Requête R6
 * Récupérer le nombre d'articles postés par un auteur donné (id_auteur)
*/
// PLACER ICI VOTRE FONCTION


/*                                              Requête R7
 * Récupérer le nombre d'articles postés par chaque auteur
 * On souhaite récupérer l'id, le prénom, le nom et le nombre d'articles ce chaque auteur
*/
// PLACER ICI VOTRE FONCTION
