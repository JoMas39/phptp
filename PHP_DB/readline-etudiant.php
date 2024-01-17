<?php


// Modifier le programme pour que l'user saisisse un id


/**
 * @var PDO $connexion
 */
require "config/db-config.php";

// Saisie par l'user
$choix=readline("Veuillez saisir l'id de l'étudiant : ");

// Préparer la requête
$requete = $connexion->prepare("SELECT * FROM etudiant WHERE id_etudiant= :id");
// Donner une valeur au paramète
// $requete->bindValue(":id", $choix); on peut fusionner cette ligne avec la suivante
//Exécuter la requête
$requete->execute([
    ":id"=>$choix
]);
//Récupérer les données
$etudiant = $requete->fetch(PDO::FETCH_ASSOC);
// Test si l'étudiant existe
if ($etudiant) {
//$etudiant est un tableau associatif correspondant à l'enregistrement recherché
// Affichage des résultats
    print_r($etudiant);
} else {
    echo "L'étudiant recherché n'existe pas !";
}
