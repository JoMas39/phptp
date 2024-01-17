<?php

//Afficher le nombre d'étudiants par promotion
/**
 * @var PDO $connexion
 */
require "config/db-config.php";

//Ecrire la requete
$SQL="SELECT DISTINCT nom_promotion, nom_etudiant 
FROM etudiant, promotion 
WHERE etudiant.id_promotion=promotion.id_promotion 
ORDER BY nom_etudiant";

// Préparer la requête
$requete = $connexion->prepare($SQL);

//Exécuter la requête
$requete->execute();

//Récupérer les données
$resultats=$requete->fetchAll(PDO::FETCH_ASSOC);

// Affichage des résultats
foreach ($resultats as $resultat){
    echo $resultat["nom_promotion"]. " : " . $resultat["nom_etudiant"]. "\n" ;
}