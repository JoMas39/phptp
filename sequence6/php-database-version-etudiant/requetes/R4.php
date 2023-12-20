<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";
require_once "requetes.php";

/*
 * Test requête R4
*/

// Saisie de l'utilisateur pour la date limite :
$dateLimiteR4 = readline("Saisir une date (dd-mm-yyyy) : ");
//Appel de la fonction
$resultatsArticlesApresDate = recupererArticlesApresDate($tableArticles, $tableAuteurs, $dateLimiteR4);
//Résultats
print_r($resultatsArticlesApresDate);

