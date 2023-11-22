<?php
//demander à l'utilisateur de saisir un nom de domaine et
// afficher le nom des membres ayant une adresse email avec ce nom de domaine
$membres=[
    "Dumézil"=>"dumezil@free.fr",
    "Eliade"=>"eliade@gmail.com",
    "Schuon"=>'schuon@laposte.net',
    "Guénon"=>"guenon@free.fr",
    "Dupont"=>"dupont@laposte.net",
    "Petit"=>"petit@free.fr",
    "Martin"=>"martin@gmail.com",
    "Jean"=>"jean@laposte.net"
];
print_r($membres);

foreach ($membres as $membre=>$mail){
    echo "$membre : $mail", "\n";
}

// Saisie de l'utilisateur
$nom=readline("Saisissez un nom :");
//Confirmation de saisie
echo "Vous recherchez $nom", "\n";

$verif=array_keys($membres);
if($nom=$verif){
    echo "Contact trouvé : $membre , $mail ";
}
else {
    echo "Le contact n'est pas trouvé.";
}
