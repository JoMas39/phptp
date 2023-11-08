<?php
// Return current date from the remote server
date_default_timezone_set('Europe/Paris');
$date = date('d/m/Y');
echo "Aujourd'hui nous sommes le $date";
echo PHP_EOL;
$heure=date('H\hi');
echo "Il est actuellement $heure";
echo PHP_EOL;


if ($heure>13.0) {
    echo "Je vous souhaite un bon après-midi";
} else {
    echo "Je vous souhaite une bonne matinée";
}

