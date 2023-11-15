<?php
$array=[];
$note=readline("veuillez saisir une note entre 0 et 20 (q pour arrêter) : ");

while ($note!="q"){
    if ($note <0 || $note>20){
        echo "La note saisie est incorrecte", "\n";
        $note=readline("veuillez saisir une note entre 0 et 20 (q pour arrêter) : ");
    }
    $note=readline("veuillez saisir une note entre 0 et 20 (q pour arrêter) : ");
}




//array_push()