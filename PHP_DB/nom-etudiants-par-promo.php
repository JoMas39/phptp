<?php

//Afficher le nombre d'étudiants par promotion
/**
 * @var PDO $connexion
 */
require "config/db-config.php";

// Préparer la requête
$requete = $connexion->prepare("
SELECT nom_promotion, COUNT(etudiant.id_promotion) as nbEtudiants
FROM etudiant, promotion 
WHERE etudiant.id_promotion=promotion.id_promotion 
GROUP BY nom_promotion;");

//Exécuter la requête
$requete->execute();

//Récupérer les données
$resultats=$requete->fetchAll(PDO::FETCH_ASSOC);

// Affichage des résultats
foreach ($resultats as $resultat){
    echo $resultat["nom_promotion"]. " : " . $resultat["nbEtudiants"] . " étudiants". "\n" ;
}