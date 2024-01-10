<?php
// Définir les informations de connexion
const DB_HOST = "localhost:3306";
const DB_NAME = "db_intro";
const DB_USER = "root";
// couple login + mot de pass = identifiants ou credentials
const DB_PASSWORD = "";
// Utiliser PDO pour créer une connexion à la DB
$connexion = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASSWORD);
// 1) Exécution de la requête
// 1.1 Préparation de la requête
$requete=$connexion->prepare("SELECT prenom_etudiant, nom_etudiant FROM etudiant ORDER BY nom_etudiant");
// 1.2 Exécution de la requête (envoi de la requête)
$requete->execute();
// 2) Récupération des données (des enregistrements)
// $requete->setFetchMode(PDO::FETCH_ASSOC);  ligne devenue inutile, on intègre dans fetchAll le contenu des parenthèses
$resultats=$requete->fetchAll(PDO::FETCH_ASSOC);
// 3) Affichage des résultats
print_r($resultats);
//foreach ($resultats as $resultat){
    // $resultat : tableau asso
  //  echo $resultat["prenom_etudiant"] . " " .
    //    $resultat["nom_etudiant"] . PHP_EOL;
//}
// Pour simplier, on met les deux champs dans le SELECT. La sélection des champs se fait dans le query, pas avec un foreach