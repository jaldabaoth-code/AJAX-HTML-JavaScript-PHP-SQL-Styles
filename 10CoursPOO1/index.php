<?php
// index.php

require_once 'Bicycle.php';
$bike = new Bicycle();
var_dump($bike);

$bike->setColor('blue');
/*$bike->color = 'blue';*/
$bike->currentSpeed = 0;
var_dump($bike); // then, another dump.





// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();


// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('yellow');
$rockrider->color = 'yellow';
var_dump($rockrider); // then, another dump.
// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle();
$tornado->color = 'black';

$tornado->forward();
/*
public function dump()
{
    var_dump($this);
}*/

var_dump($bike);
/* $bike->dump(); */