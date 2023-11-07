<?php
$nombre1=readline("Veuillez saisir un nombre (nombre 1) :");
$nombre2=readline("Veuillez saisir un nombre (nombre 2) :");
$division=$nombre1/$nombre2;
echo "Le résultat de la division de $nombre1 par $nombre2 est :" .round($division,2);

// round pour arrondir, 2 de précision

// Ok ça marche