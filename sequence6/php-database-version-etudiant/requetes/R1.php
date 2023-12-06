<?php

require_once "../base-de-donnees/tableArticle.php";
require_once "../base-de-donnees/tableAuteur.php";
require_once "../base-de-donnees/tableCategorie.php";
require_once "requetes.php";

/*
 * Test requête R1
*/
foreach ($tableArticles as $table){
    ["titre"=>$titre,"contenu"=>$contenu, "date_creation"=>$date_creation, "actif"=>$actif, ]=$table;
    if ($actif==true){
        echo "$titre,$contenu, $date_creation, $actif \n";
        echo PHP_EOL;
    }
}

//Donnée
$resultats = rechercherArticlesActifs($tableArticles);

print_r($resultats);
//Fin donnée
