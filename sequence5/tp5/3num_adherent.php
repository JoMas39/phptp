<?php
//Créez une fonction genererNumeroAdhérent qui génère un numéro d'adhérent dont le format est le suivant : AD-999999.
//Le format doit donc comporter 9 caractères.
//Exemple :
//
//AD-987544
//AD-342943
//AD-000007

//Définir fonction
require 'tp-fonctions.php';

//Appel de la fonction
echo "Voici le numéro d'adhérent généré aléatoirement : ".genererNumeroAdherent();