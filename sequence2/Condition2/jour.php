<?php
date_default_timezone_set('Europe/Paris');

$date = date('j/m/Y');
echo "Aujourd'hui nous sommes le $date";
echo PHP_EOL;

if ($date=="Wednesday") {
    echo "Je vous souhaite un bon week-end";
} elseif ($date=="Sunday") {
    echo "Je vous souhaite un bon dimanche";
} else {
    echo "Je vous souhaite une bonne semaine";
}

// Echec
// Impossible de prendre en compte le jour actuel