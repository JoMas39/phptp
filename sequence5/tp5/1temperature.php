<?php
// Créez une fonction convertirCelsiusFahrenheit qui convertit une température de Celsius en Fahrenheit.
//La fonction a un paramètre (la température en Celcius) et retourne la température convertie en Fahrenheit.

//Pour convertir en degrés Celsius une température donnée en degrés Fahrenheit, il suffit de
// soustraire 32 et de diviser par 1,8 (9/5 = 1,8) le nombre ainsi obtenu.
// Pour 50 °F , on obtient : 50 - 32 = 18, puis 18/1,8 = 10 ; donc 50 °F = 10 °C .


//Définir fonction
require 'tp-fonctions.php';

//Générer une température
$choix_temperature=readline("Veillez saisir une température en Celsius : ");

//Appeler la fonction
echo "Cela donne " .convertirCelsiusFahrenheit($choix_temperature). " degrés en Fahrenheit";