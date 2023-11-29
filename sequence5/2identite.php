<?php
//Demande à l'user de saisir prénom + nom
//Définit une fonction qui retourne l'identité de la personne sous la forme d'une chaîne de caractère l'identité de l'user
// 1ere lettre du prénom en majuscule et nom en majuscules
// francks lamy devient Franck LAMY

//Readline
$prenom=readline("Veuillez saisir votre prénom : ");
$nom=readline("Veuillez saisir votre nom : ");

//Définir fonction
function retournerIdentite (string $prenom, string $nom): string {
    $identite=ucfirst(strtolower($prenom))
        . ' '
        . strtoupper(strtolower($nom));
    return $identite;
}

//Appel de la fonction
echo "".retournerIdentite($prenom, $nom);