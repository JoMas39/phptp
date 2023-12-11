<?php
$livres = [
    "Les Misérables:Victor Hugo:1862:Roman historique:978-0-679-60129-2",
    "Notre-Dame de Paris:Victor Hugo:1831:Roman gothique:978-0-679-60136-0",
    "Le Comte de Monte-Cristo:Alexandre Dumas:1844:Roman d'aventure:978-0-679-60130-8",
    "Les Trois Mousquetaires:Alexandre Dumas:1844:Roman d'aventure:978-0-679-60137-7",
    "Madame Bovary:Gustave Flaubert:1857:Roman réaliste:978-0-679-60131-5",
    "L'Education sentimentale:Gustave Flaubert:1869:Roman:978-0-679-60138-4",
    "Le Petit Prince:Antoine de Saint-Exupéry:1943:Roman:978-2-07-040850-4",
    "Vol de nuit:Antoine de Saint-Exupéry:1931:Roman:978-2-07-040851-1",
    "Candide:Voltaire:1759:Conte philosophique:978-0-679-60132-2",
    "Zadig:Voltaire:1747:Conte philosophique:978-0-679-60139-1"
];
[$titre,$auteur,$date,$genre,$isbn] = explode(':', $livres);

// Afficher pour chaque livre son titre, son auteur et son année de parution
// Format d'affichage : "Titre" écrit par "Auteur" en "Année de parution"
echo "------------ Liste des livres ------------".PHP_EOL;
echo "$titre écrit par $auteur en $date";
echo PHP_EOL;