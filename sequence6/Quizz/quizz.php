<?php

// Les questions organisées dans un tableau.
$questions = [
    [
        'question' => "Quelle est la capitale de la France ?",
        'reponses' => ["1. Paris", "2. Berlin", "3. Rome", "4. Madrid"],
        'correct' => 1
    ],
    [
        'question' => "Quel est le résultat de 3 + 4 ?",
        'reponses' => ["1. 5", "2. 7", "3. 9", "4. 12"],
        'correct' => 2
    ],
    [
        'question' => "Quelle est la capitale de la Russie ?",
        'reponses' => ["1. Saint-Pétersbourg", "2. Moscou", "3. Novossibirsk", "4. Iekaterinbourg"],
        'correct' => 2
    ],
    [
        'question' => "Jusqu’en 1923, comment s’appelait la ville turque d’Istanbul ?",
        'reponses' => ["1. Babylone", "2.Byzance ", "3. Izmir", "4. Constantinople"],
        'correct' => 4
    ],
    [
        'question' => "Quel est l’animal national de l’Australie ?",
        'reponses' => ["1. Le tapir des dunes", "2. L'australopithèque ventru", "3. Le kangourou roux", "4. Le wombat"],
        'correct' => 3
    ]
];

print_r($questions);