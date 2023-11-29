<?php
                                            //Exo 1 : changer la température
function convertirCelsiusFahrenheit(int $temperature) : int{
    $calcul=($temperature-32)/1.8;
    return $calcul;
}




                                            //Exo 2 : générer un mot de passe
function genererMotDePasse($longueur = 12){
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*().';
    $longueurMax = strlen($caracteres);
    $chaineAleatoire = '';
    for ($i = 0; $i < $longueur; $i++)
    {
        $chaineAleatoire .= $caracteres[rand(0, $longueurMax - 1)];
    }
    return $chaineAleatoire;
}




                                                //Exo 3 : générer un numéro d'adhérent
function genererNumeroAdherent($longueur = 6){
    $chaineAleatoire = '';
    for ($i = 0; $i < $longueur; $i++)
    {
        $chaineAleatoire = "AD-".rand(100000,999999);
    }
    return $chaineAleatoire;
}




                                                //Exo 4 : générer un acronyme
function genererAcronyme(string $phrase) : string {
    $mots = explode(" ", $phrase);
    $acronyme="";
    foreach ($mots as $mot)
        $acronyme .= ucfirst(substr($mot,0,1));
    return $acronyme;
}


                                                //Exo 5 :
