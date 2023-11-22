<?php


print_r(array_keys($contacts));
$nomContact=array_keys($contacts);






//Saisie de l'utilisateur
$nom=readline("Saisissez un nom : ");

//NOM : Première lettre en majuscule, le reste en minuscule
$nomMin=ucfirst(strtolower($nom));

//Confirmation de la saisie
echo "Vous recherchez : $nomMin";
echo PHP_EOL;

//Boucle
foreach ($contacts as $contact=>$tel) {
    if (array_key_exists($nomMin, $contacts)) {
        echo "Contact trouvé : $contact : $tel ";
    } else {
        echo "Le contact n'est pas trouvé.";
    }
}
