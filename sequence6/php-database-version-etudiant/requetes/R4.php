<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";
require_once "requetes.php";

/*
 * Test requête R4
*/
//Donnée
$dateCreation = readline("Saisir une date (dd-mm-yyyy) : ");
//Fin donnée

foreach ($tableArticles as $table){
    ["titre"=>$titre,"contenu"=>$contenu, "date_creation"=>$date_creation, "actif"=>$actif, "id_auteur"=>$idAuteur,"id_categorie"=>$idCategorie]=$table;
    if ($dateCreation>$date_creation){
        echo "$titre,$contenu, $date_creation, $idAuteur, $idCategorie \n";
        echo PHP_EOL;
    }
}
//Faut encore ajouter le lien avec l'auteur