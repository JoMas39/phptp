<?php

echo "Voici tous les nombres pairs entre 0 et 100 : ";

for ($nombre = 0; $nombre <= 100 && $nombre % 2 == 0; $nombre += 2) {
    echo $nombre. " ";
}


// CA MARCHE