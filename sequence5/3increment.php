<?php

function incrementer (int $nombre): int {
    $nombre+=1 ;
    return $nombre;
}

$compteur=1;
$resultat=incrementer($compteur);
echo $resultat;