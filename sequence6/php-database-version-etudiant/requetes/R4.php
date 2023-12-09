<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";
require_once "requetes.php";

/*
 * Test requête R4
*/
//Donnée
$dateCreation = readline("Saisir une date (dd-mm-yyyy) : ");
//Fin donnée

foreach ($tableArticles as $table){
    ["titre"=>$titre,"contenu"=>$contenu, "date_creation"=>$date_creation, "actif"=>$actif, "id_auteur"=>$idAuteur,"id_categorie"=>$idCategorie]=$table;
    if ($dateCreation>$date_creation){
        echo "$titre,$contenu, $date_creation, $idAuteur, $idCategorie \n";
        echo PHP_EOL;
    }
}
//Faut encore ajouter le lien avec l'auteur


/*
function recupererArticlesApresDate(array $tableArticles, array $tableAuteurs, string $dateLimite): array {
    $resultats = [];

    foreach ($tableArticles as $idArticle => $article) {
        ["titre" => $titre, "contenu" => $contenu, "date_creation" => $date_creation, "id_auteur" => $idAuteur] = $article;

        // Vérifier si la date de création est supérieure à la date limite
        if (strtotime($date_creation) > strtotime($dateLimite)) {
            // Vérifier si l'auteur existe
            if (array_key_exists($idAuteur, $tableAuteurs)) {
                $nomAuteur = $tableAuteurs[$idAuteur]["prenom"] . " " . $tableAuteurs[$idAuteur]["nom"];

                // Ajouter les informations nécessaires au tableau des résultats
                $resultats[] = [
                    "id" => $idArticle,
                    "titre" => $titre,
                    "contenu" => $contenu,
                    "date_creation" => $date_creation,
                    "auteur" => $nomAuteur
                ];
            } else {
                echo "L'auteur avec l'ID $idAuteur n'existe pas pour l'article avec l'ID $idArticle.\n";
            }
        }
    }

    return $resultats;
}

// Exemple d'utilisation de la fonction R4 avec une date limite
$dateLimiteR4 = "2022-01-01";
$resultatsArticlesApresDate = recupererArticlesApresDate($tableArticles, $tableAuteurs, $dateLimiteR4);

// Affichage des résultats R4
foreach ($resultatsArticlesApresDate as $resultat) {
    echo "ID: {$resultat['id']}, Titre: {$resultat['titre']}, Contenu: {$resultat['contenu']}, Date de création: {$resultat['date_creation']}, Auteur: {$resultat['auteur']}\n";
}

 */