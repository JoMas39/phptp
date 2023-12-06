<?php

require_once "../base-de-donnees/tableArticle.php";
require_once "../base-de-donnees/tableAuteur.php";
require_once "../base-de-donnees/tableCategorie.php";
require_once "requetes.php";

/*
 * Test requête R2
 * function recupererArticlesCategorie(array $tableArticle, $tableCategorie) : array {
    $resultats = [];
    // Implémentation
    return $resultats;
}
*/
//Donnée
$categorieId = readline("Saisir l'id d'une catégorie : ");
// Fin donnée

foreach ($tableArticles as $table){
    ["titre"=>$titre,"contenu"=>$contenu, "date_creation"=>$date_creation, "actif"=>$actif, "id_auteur"=>$idAuteur,"id_categorie"=>$idCategorie]=$table;
    if ($categorieId==$idCategorie){
        echo "$titre,$contenu, $date_creation, $idAuteur, $idCategorie \n";
        echo PHP_EOL;
    }
}

/*function recupererArticlesCategorie(array $tableArticle, $tableCategorie) : array {
    $resultats = [];
    // Implémentation
    return $resultats;
}
*/



