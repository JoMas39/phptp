<?php

$moyenne=16;

if ($moyenne>=16){
    echo "Mention très bien.";
}

elseif ($moyenne >= 14 && $moyenne < 16){
    echo "Mention bien.";
}

elseif ($moyenne >= 12 && $moyenne < 14){
    echo "Mention assez bien.";
}

elseif ($moyenne >= 10 && $moyenne < 12){
    echo "Mention passable.";
}

elseif ($moyenne<10){
    echo "Vous n'avez pas votre diplôme.";
}