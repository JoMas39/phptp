<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";
require_once "requetes.php";

/* Test requête R6 */

// Saisie de l'utilisateur pour l'ID de l'auteur
$idAuteur = readline("Saisir l'id d'un auteur : ");

$resultatsArticlesParAuteur=nombreArticlesParAuteur($tableArticles, $idAuteur);
echo "Le nombre d'articles postés par l'auteur avec l'ID $idAuteur est : $resultatsArticlesParAuteur\n";