<?php

echo "Seules les adresses au format nom@gmail.com sont valides";
echo PHP_EOL;

$mail=readline("Veuillez renseigner votre adresse e-mail :");
echo PHP_EOL;

$mail2=strtolower($mail);

echo "Vous avez saisi $mail2";
echo PHP_EOL;

$pattern="/abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789/";

if (preg_match($pattern,$mail2)){
    echo "L'adresse $mail2 est valide !";
}else{
    echo "L'adresse $mail2 est invalide !";
}

