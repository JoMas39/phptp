<?php
$array=[];
$note="";

while ($note!="q"){
    $note=readline("veuillez saisir une note entre 0 et 20 (q pour arrêter) : ");
    if ($note <0 || $note>20){
        echo "La note saisie est incorrecte", "\n";
        $note=readline("veuillez saisir une note entre 0 et 20 (q pour arrêter) : ");
    }
}




//array_push()