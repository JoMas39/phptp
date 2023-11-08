<?php


$heure=readline("Veuillez saisir l'heure (h:mm) :");
echo PHP_EOL;


if ($heure<9 && $heure>12) {
    echo "Le magasin est fermé";

} elseif ($heure<14 && $heure>19) {
    echo "Le magasin est fermé";

} else {
    echo "Le magasin est ouvert";
}

// Ne fonctionne pas tout le temps (apm fermé)
