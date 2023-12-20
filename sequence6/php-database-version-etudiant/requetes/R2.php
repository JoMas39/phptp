<?php

require_once "../base-de-donnees/tableArticle.php";
require_once "../base-de-donnees/tableAuteur.php";
require_once "../base-de-donnees/tableCategorie.php";
require_once "requetes.php";


// Saisie de l'utilisateur pour l'ID de la catégorie
$categorieId = (int)readline("Saisir l'id d'une catégorie : ");

echo "...................................................................................... \n";
$resultats = recupererArticlesCategorie($tableArticles,$tableCategories, $categorieId);
print_r($resultats);
echo "......................................................................................";