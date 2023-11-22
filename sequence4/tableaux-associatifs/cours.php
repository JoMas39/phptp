<?php

//Déclarer et initialiser un tableau de notes.
//Clés = nom de l'étudiant
//Valeurs = note

$notes=[
  "dupond"=>12,
  "martin"=>16,
  "durand"=>7,
  "JEAN"=>10
];
print_r($notes);

//Ajouter une nouvelle note (15) pour l'étudiant Petit.
$notes["petit"]=15;
print_r($notes);
// Le nouvel élément se place à la fin.

//Modifier une valeur déjà rentrée.
$notes["petit"]=10;
print_r($notes);
//La nouvelle valeur de la clé remplace la valeur précédente.

//Afficher l'ensemble des notes.
foreach ($notes as $note) {
    echo "$note ";
}
echo PHP_EOL;

//Afficher le nom de chaque étudiant avec sa note
foreach ($notes as $nom=>$note) {
    echo "$nom : $note", "\n";
}
echo PHP_EOL;

//Afficher la même chose, mais avec le nom en minuscule, avec la première lettre en majuscule
foreach ($notes as $nom=>$note) {
    $nom=ucfirst(strtolower($nom));
    echo "$nom : $note", "\n";
}
echo PHP_EOL;

//Afficher le nom de chaque étudiant
print_r(array_keys($notes));
//Pour récupérer ces noms :
$noms=array_keys($notes);
print_r($noms);
// Pour afficher la liste simplement :
foreach ($noms as $nom) {
    echo "$nom ";
}


//Supprimer l'élément JEAN
unset($notes["JEAN"]);
print_r($notes);





//Calculer et afficher la moyenne des notes
$somme=array_sum($notes);
$diviseur=count($notes);
$moyenne= $somme/$diviseur;
echo "La moyenne des notes est : $moyenne";
echo PHP_EOL;
//Plus simple :
$moyenne= array_sum($notes)/count($notes);
echo "La moyenne des notes est : $moyenne";
echo PHP_EOL;

//Prendre en compte la possibilité que le tableau soit vide
if (!empty($notes)){
    // empty = vide ; !empty = pas vide
    $moyenne2=array_sum($notes)/count($notes);
    echo "La moyenne des notes est : " .round($moyenne,2);
}





//Afficher la liste des étudiants triés par un ordre alphabétique
$noms=array_keys($notes);
sort($noms);
print_r($noms);