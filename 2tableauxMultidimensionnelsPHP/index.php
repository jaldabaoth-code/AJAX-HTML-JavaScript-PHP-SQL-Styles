<?php

$movies = [
    'Raiders of the Lost Ark' => ['Harrison Ford', 'Karen Allen', 'Paul Freeman'],
    'Indiana Jones and the Temple of Doom' => ['Harrison Ford', 'Kate Capshaw', 'Ke Huy Quan'],
    'Indiana Jones and the Last Crusade' => ['Harrison Ford', 'Cate Blanchett', 'Shia LaBeouf'],
];

foreach($movies as $movieTitle => $nameOfTheActor){
echo "Dans le film " . $movieTitle . ", les principaux acteurs sont : " . $nameOfTheActor[0] . ", " . $nameOfTheActor[1] . ", " . $nameOfTheActor[2] . ". \n";
}