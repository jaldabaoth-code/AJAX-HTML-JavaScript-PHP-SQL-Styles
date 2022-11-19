<?php

$characters = [
    "Negan" => [
        "city" => "The Sanctuary",
        "weapon" => "Lucille"
    ],
    "Daryl" => [
        "city" => "Alexandria",
        "weapon" => "crossbow"
    ],
    "Ezekiel" => [
        "city" => "The Kingdom",
        "weapon" => "Shiva"
    ]
];

// We write code here
$myTable['Thomas']['city'] = 'Orleans';
$myTable['Thomas']['weapon'] = 'Katana';

$characters = array_merge($characters, $myTable);

var_dump($characters);