<?php
$jeu=true;

while ($jeu=true) {
    echo "Présentation des règles :
    Bienvenue dans le jeu de devinette !
    Le but est de deviner un nombre entre 1 et 100.
    Vous avez 10 à 15 essais pour trouver le nombre
    Bonne chance !";
    echo PHP_EOL;

    echo "Menu :
    1. Jouer
    2. Voir les résultats.
    3. Voir les résultats d'un jour.
    4. Voir les résultats d'un joueur.
    5. Quitter.";
    echo PHP_EOL;
    $menu = readline("Votre choix : 1, 2, 3, 4 ou 5 :");


    if ($menu == 1) {
        echo "Jouer ! \n";
        //Choix du pseudo de l'utilisateur
        $pseudo = readline("Veuillez renseigner votre pseudo : ");
        echo "Bienvenue $pseudo !";
        echo PHP_EOL;

        //Choix de l'ordinateur
        $ordi = random_int(1, 100);
        echo "L'ordinateur a choisi un nombre. A vous de le deviner !";
        echo PHP_EOL;

        //Choix aléatoire des limites
        $limite = random_int(10, 15);
        echo "Vous aurez droit à $limite tentatives";
        echo PHP_EOL;

        $tentatives = 0;

//Choix du nombre entre 1 et 100 de l'utilisateur
        $choix = readline("Veuillez choisir un nombre entre 1 et 100 : ");
        while ($choix != $ordi) {
            $tentatives = $tentatives + 1;
            echo "Vous avez réalisé $tentatives tentatives";
            echo PHP_EOL;

            if ($choix > $ordi) {
                $choix = readline("Le nombre choisi est trop grand. Recommencez : ");
            }
            if ($choix < $ordi) {
                $choix = readline("Le nombre choisi est trop petit. Recommencez : ");
            }
            if ($choix < 1 || $choix > 100) {
                $choix = readline("Sélection invalide. Veuillez choisir un nombre entre 1 et 100 : ");
            }
            if ($choix == $ordi && $tentatives <= 10) {
                echo "Excellent $pseudo : vous avez trouvé le nombre $ordi en $tentatives tentatives !";
                $resultat = " Excellent ! Vous avez trouvé le nombre en $tentatives essais.";
                echo PHP_EOL;
            } elseif ($choix == $ordi && $tentatives > 10) {
                echo "Bien joué $pseudo : vous avez trouvé le nombre $ordi en $tentatives tentatives !";
                $resultat = " Bien joué ! Vous avez trouvé le nombre en $tentatives essais.";
            }
            if ($tentatives > $limite) {
                echo "Désolé $pseudo : : vous avez atteint le nombre maximum de $tentatives tentatives ! Le nombre était $ordi !";
                $resultat = " Perdu ! Le nombre à deviner était $ordi";
                break;
            }
        }

//Fichier texte
        $fichier = fopen("resultats.txt", "a+");
        $jour = date("d/m/y");
        $heure = date("H:i:s");
        fwrite($fichier, "$jour $heure - Pseudo: $pseudo - Résultat: $resultat \n");
        fclose($fichier);
    }

    elseif ($menu==2){
        echo "Voir les résultats. \n";
        $choix2=fopen("resultats.txt", "r");
        echo $choix2, "\n";
    }

    elseif ($menu==3){
        echo "Voir les résultats d'un jour. \n";
    $date_result=readline("Choisissez une date au format jour/mois/année : ");
        $choix3=fopen("resultats.txt", "r");
        echo $choix3, "\n";
    }

    elseif ($menu==4){
        echo "Voir les résultats d'un joueur. \n";
        $pseudo_result=readline("Choisissez un pseudo : ");
        $choix4=fopen("resultats.txt", "r");
        echo $choix4, "\n";
    }

    elseif ($menu==5){
        echo "Quitter. \n";
        $jeu=false;
        break;
    }

}
