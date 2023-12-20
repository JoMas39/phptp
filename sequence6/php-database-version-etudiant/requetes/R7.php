<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";
require_once "requetes.php";

$resultatsNombreArticlesParAuteur = nombreArticlesParChaqueAuteur($tableArticles, $tableAuteurs);
print_r($resultatsNombreArticlesParAuteur);
