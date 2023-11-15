<?php
//OK FINI

// Tableau pour stocker les notes
$notes = [];

// Boucle pour demander à l'utilisateur de saisir des notes
while (true) {
    $note = readline("Entrez une note (ou 'q' pour quitter) : ");

    // Vérifier si l'utilisateur veut quitter
    if (strtolower($note) == 'q') {
        break;
    }

    // Convertir la note en nombre à virgule flottante
    $note = floatval($note);

    // Vérifier si la note est valide (entre 0 et 20)
    if ($note >= 0 && $note <= 20) {
        $notes[] = $note; // Ajouter la note au tableau
    } else {
        echo "Veuillez entrer une note valide entre 0 et 20.\n";
    }
}

echo "Vous avez saisi " .count($notes). " notes", "\n";
echo "Les notes saisies sont : ", " ";
foreach ($notes as $note) {
    echo $note, " ";
}

echo "Notes supérieures ou égales à 10", "\n";
$sup10=[];
foreach ($notes as $note) {
    if ($note>=10){
        $sup10[]=$note;
        echo $note, "\n";
    }
}

$somme= array_sum($sup10);
$nbnote=count($sup10);
$moyenne=$somme/$nbnote;
if ($somme>0){
    $moyenne=$somme/$nbnote;
    echo "La moyenne des notes supérieures ou égales à 10 est de $moyenne";
}
else{
    echo "Il n'y a aucune note supérieure ou égale à 10";
}

