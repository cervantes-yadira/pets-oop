<?php

// include classgit
require('pet.php');

// instantiate a pet object
$pet1 = new Pet("Pandora", "grey");
$pet2 = new Pet("Puppy");
$pet3 = new Pet();

// invoke pet methods
$pet1->eat();
$pet1->talk();
$pet1->sleep();

// test name setter and getter
$pet1->setName("Spot");
echo "<p>Pet1 name is {$pet1->getName()}</p>";

// test color setter and getter
$pet3->setColor("white");
echo "<p>Pet3 color is {$pet3->getColor()}</p>";

//
echo "<pre>";
var_dump($pet1);
var_dump($pet2);
var_dump($pet3);
echo "</pre>";