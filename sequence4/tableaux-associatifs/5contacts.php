<?php
$contacts=[
    "Eliade"=>1111111111,
    "Schuon"=>2222222222,
    "Guenon"=>3333333333,
    "Dupont"=>4444444444,
    "Durand"=>5555555555,
    "Petit"=>6666666666,
    "Martin"=>7777777777,
    "Jean"=>8888888888,
    "Dumezil"=>9999999999
];
print_r($contacts);

foreach ($contacts as $contact=>$tel){
    echo "$contact : $tel", "\n";
}

// Saisie de l'utilisateur
$nom=readline("Saisissez un nom :");
$nomMin=ucfirst(strtolower($nom));
//Confirmation de saisie
echo "Vous recherchez : $nomMin";
echo PHP_EOL;

$verif=array_keys($contacts);
if($nomMin=$verif){
    echo "Contact trouvé : $contact , $tel ";
}
else {
    echo "Le contact n'est pas trouvé.";
}