<?php

date_default_timezone_set('Europe/Paris');

$heure=readline("Veuillez saisir l'heure (h:mm) :");
echo PHP_EOL;

if ($heure<9 || $heure>19) {
echo "Le magasin est ouvert";
} else {
    echo "Le magasin est fermé";
}
