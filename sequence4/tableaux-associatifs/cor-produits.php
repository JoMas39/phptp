<?php
// Création d'un tableau associatif avec les noms des produits et leurs prix
$produits = [
    'Pommes' => 1.50,
    'Oranges' => 2.00,
    'Bananes' => 2.50,
    'Raisins' => 3.00
];

// Calcul du prix total des produits
$prix_total = array_sum($produits);

// Affichage du prix total
echo "Le prix total des produits est: $prix_total Euros.\n";

