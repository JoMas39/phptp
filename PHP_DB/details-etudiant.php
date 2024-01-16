<?php
/**
* @var PDO $connexion
*/
require "config/db-config.php";

// Préparer la requête
$requete=$connexion->prepare("SELECT * FROM etudiant WHERE id_etudiant= :id");
// Donner une valeur au paramète
$requete->bindValue(":id",2);
//Exécuter la requête
$requete->execute();
//Récupérer les données
$etudiant=$requete->fetch(PDO::FETCH_ASSOC);
//$etudiant est un tableau associatif correspondant à l'enregistrement recherché
// Affichage des résultats
print_r($etudiant);
