<?php
$choix=readline("Saisissez un nombre : ");
echo "Voici tous les nombres pairs entre 0 et $choix : ";
for ($nombre = 0; $nombre <= $choix && $nombre % 2 == 0; $nombre=$nombre+2) {
    echo $nombre . " ";
}

// CA MARCHE