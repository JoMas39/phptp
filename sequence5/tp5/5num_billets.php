<?php
//Créez une fonction genererNumerosbillets qui génère et retourne un tableau contenant des numéros de billets pour un événement.

//Un numéro de billet doit respecter le format EVT-yyyyMMdd-9999
// où yyyyMMdd est la date du jour et 9999 est un nombre aléatoire à quatre chiffres.

//Le nombre de numéros à générer devra être un paramètre de la fonction.
// Les numéros renvoyés dans le tableau devront tous être uniques (pas de doublons).

//______________________________________________________________________________________________________________\\

//Créez une fonction acheterBillet permettant à une personne
// identifée par son nom d'acheter un billet parmi ceux générés par la fonction genererNumerosbillets.

//Attention le billet doit faire partie des billets générés et ne pas avoir déjà été vendu.

//Chaque fois qu'un billet est vendu,
// on doit enregistrer la vente dans un tableau associatif
// avec
// comme clé le numéro de billet
// et comme valeur le nom de la personne.


// Génération de 50 billets
$billetsDisponibles = genererNumerosBillets(50);

$billetsVendus = [];
// Achat de billets
acheterBillet("Alice","EVT-20231129-6743",$billetsDisponibles,$billetsVendus);
acheterBillet("Bob","EVT-20231129-1289",$billetsDisponibles,$billetsVendus);
acheterBillet("Charly","EVT-20231129-4587",$billetsDisponibles,$billetsVendus);
// Affichage des billets vendus
foreach($billetsVendus as $billetVendu as $nom) {
    echo "$nom a acheté le billet $billetVendu" . PHP_EOL;
}