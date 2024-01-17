<?php
// Afficher le nombre d'étudiants dans la table

/**
 * @var PDO $connexion
 */
require "config/db-config.php";

// 1) Exécution de la requête
// 1.1 Préparation de la requête
$requete=$connexion->prepare("SELECT COUNT(*) as nbEtudiants FROM etudiant");
// 1.2 Exécution de la requête (envoi de la requête)
$requete->execute();
// 2) Récupération des données (des enregistrements)
// $requete->setFetchMode(PDO::FETCH_ASSOC);  ligne devenue inutile, on intègre dans fetchAll le contenu des parenthèses
//$resultat=$requete->fetch(PDO::FETCH_ASSOC);
$resultat=$requete->fetchColumn();
// 3) Affichage des résultats
//echo "Il y a ".$resultat['nbEtudiants']. "étudiants dans cette table";
echo "Il y a $resultat étudiants dans cette table";