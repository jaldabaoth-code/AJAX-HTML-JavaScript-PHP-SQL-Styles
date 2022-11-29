<?php

function writeSecretSentence(string $animal, string $object): string
{
    $secretSentence = $animal . " incline face à " . $object . ". \n";
    return $secretSentence;
}

$animal = readline("Entrez le nom d'un animale : ");
$objet = readline("Entrez le nom d'un objet : ");

$secretSentence = writeSecretSentence($animal, $objet);

echo $secretSentence;