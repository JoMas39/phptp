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

// Saisie de l'utilisateur
echo "Voici les noms de domaine : 
1 = @free.fr 
2 = @gmail.com
3 = @laposte.net", "\n";


$choix=readline("Saisissez un nom de domaine :");
if ($choix=1){
    $nom="@free.fr";
}
elseif ($choix=2){
    $nom="@gmail.com";
}
elseif ($choix=3){
    $nom="@laposte.net";
}

//Confirmation de saisie
echo "Vous recherchez $nom", "\n";


$verif=array_keys($membres);
if($nom=$verif){
    echo "Contact trouvé : $membre , $mail ";
}
else {
    echo "Le contact n'est pas trouvé.";
}
