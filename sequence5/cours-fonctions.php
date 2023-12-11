<?php

function estPair(int $nb1): bool{
    if ($nb1 % 2 == 0){
        return true;
    } else{
        return false;
    }
}

function retournerIdentite (string $prenom, string $nom): string {
    $identite=ucfirst(strtolower($prenom))
        . ' '
        . strtoupper(strtolower($nom));
    return $identite;
}
