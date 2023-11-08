<?php
$voyelles=="a" || "e" || "i"|| "o"|| "u"|| "y";
echo $voyelles;
echo PHP_EOL;
$consonnes=="b" || "c" || "d" || "f" || "g" || "h" || "j" || "k" || "l" || "m" || "n" || "p" || "q" || "r" || "s" || "t" || "v" || "w" || "x" || "z";
echo $consonnes;
echo PHP_EOL;

$phrase=readline("Veuillez saisir une phrase : ");
echo "La phrase saisie est '$phrase' ";
echo PHP_EOL;
echo "Dans cette phrase il y a" .count($voyelles). "voyelles et" .count($consonnes). "consonnes";
