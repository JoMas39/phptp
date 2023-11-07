<?php
// Phrase = le temps est beau et le ciel est bleu
// Mot = "le"
$phrase=readline("Veuillez écrire une phrase :");
$mot=readline("Veuillez saisir un mot dans cette phrase :");
echo "Le mot ".$mot." apparaît ".substr_count($phrase,$mot,0,30)." fois dans la phrase";





