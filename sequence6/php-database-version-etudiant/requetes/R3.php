<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";
require_once "requetes.php";


$resultatsTousLesArticles = recupererTousLesArticles($tableArticles, $tableCategories);
print_r($resultatsTousLesArticles);
