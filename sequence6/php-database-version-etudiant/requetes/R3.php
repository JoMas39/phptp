<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";
require_once "requetes.php";

/*
 * Test requête R3
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