<?php
// Ecrire un programme emails.php qui :
//• Stocke dans un tableau $emails l'adresse email de chaque
//membre d'une association (vous prendrez en exemple les
//domaines suivants pour les adresses email : @free.fr, @gmail.com
//et @laposte.net)
//• Affiche l'ensemble des membres de l'association (nom et email)

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

