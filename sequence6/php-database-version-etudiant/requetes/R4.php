<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";
require_once "requetes.php";

/*
 * Test requête R4
*/

// Saisie de l'utilisateur pour la date limite :
$dateLimiteR4 = (int)readline("Saisir une date (dd-mm-yyyy) : ");
//Appel de la fonction
$resultatsArticlesApresDate = recupererArticlesApresDate($tableArticles, $tableAuteurs, $dateLimiteR4);
//Résultats
foreach ($resultatsArticlesApresDate as $resultat) {
    echo "ID: {$resultat['id']}, Titre: {$resultat['titre']}, Contenu: {$resultat['contenu']}, Date de création: {$resultat['date_creation']}, Auteur: {$resultat['auteur']}\n";
}