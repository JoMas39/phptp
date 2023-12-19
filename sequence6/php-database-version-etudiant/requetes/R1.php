<?php

require_once "../base-de-donnees/tableArticle.php";
require_once "../base-de-donnees/tableAuteur.php";
require_once "../base-de-donnees/tableCategorie.php";
require_once "requetes.php";

echo "...................................................................................... \n";
$resultats = rechercherArticlesActifs($tableArticles);
print_r($resultats);
echo "......................................................................................";