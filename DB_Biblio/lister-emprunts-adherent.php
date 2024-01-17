<?php
/**
 * @var PDO $connexion
 */
require "config/db-config.php";

// lister tous les
//livres en cours d’emprunt pour un adhérent donné :
//a. Demander à l’utilisateur de saisir l’id de l’adhérent
//b. Exécuter la requête
//c. Afficher le nom du livre, le nom de l’auteur et la date d’emprunt




//........................................................lister tous les livres en cours d’emprunt .............................................

// Préparer la requête
$requete = $connexion->prepare("
SELECT * 
FROM livre 
WHERE disponible =0;");
//Exécuter la requête
$requete->execute();
//Récupérer les données
$resultats=$requete->fetchAll(PDO::FETCH_ASSOC);
// Affichage des résultats
print_r($resultats);




//.............................................. Afficher le nom du livre, le nom de l’auteur et la date d’emprunt...............................

// Préparer la requête
$requete = $connexion->prepare("
SELECT titre, auteur, date_emprunt 
FROM livre, emprunt 
WHERE disponible =0 
GROUP BY titre;");
//Exécuter la requête
$requete->execute();
//Récupérer les données
$resultats=$requete->fetchAll(PDO::FETCH_ASSOC);
// Affichage des résultats
foreach ($resultats as $resultat){
    echo $resultat["titre"]. " , " . $resultat["auteur"] . " . Date d'emprunt : " . $resultat["date_emprunt"]. "\n" ;
}




//................................................livres en cours d’emprunt pour tous les adhérents...............................................

$requete = $connexion->prepare("
SELECT livre.titre, livre.auteur, date_emprunt,emprunt.id_adherent 
FROM livre, emprunt, adherent 
WHERE livre.id_livre=emprunt.id_livre 
  AND adherent.id_adherent=emprunt.id_adherent 
  AND disponible =0 ;");
//Exécuter la requête
$requete->execute();
//Récupérer les données
$resultats=$requete->fetchAll(PDO::FETCH_ASSOC);
// Affichage des résultats
foreach ($resultats as $resultat){
    echo $resultat["titre"]. " , " .
        $resultat["auteur"] . ". Date d'emprunt : " .
        $resultat["date_emprunt"]. " par l'adhérent  " .
        $resultat["id_adherent"]. "\n" ;
}
//...............................................Demander à l’utilisateur de saisir l’id de l’adhérent............................................

echo "Demander à l’utilisateur de saisir l’id de l’adhérent"."\n";
$choix=readline("Veuillez saisir l'id de l'adhérent : ");

$requete = $connexion->prepare("
SELECT livre.titre, livre.auteur, date_emprunt,emprunt.id_adherent 
FROM livre, emprunt, adherent 
WHERE livre.id_livre=emprunt.id_livre 
  AND adherent.id_adherent=emprunt.id_adherent 
  AND disponible =0
AND emprunt.id_adherent= :id
;");
//Exécuter la requête
$requete->execute([
    ":id"=>$choix
]);
//Récupérer les données
$resultats=$requete->fetchAll(PDO::FETCH_ASSOC);
// Affichage des résultats
foreach ($resultats as $resultat){
    echo $resultat["titre"]. " , " .
        $resultat["auteur"] . ". Date d'emprunt : " .
        $resultat["date_emprunt"]. " par l'adhérent  " .
        $resultat["id_adherent"]. "\n" ;
}