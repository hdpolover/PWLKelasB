<?php
require_once("Animal.php");
require_once("Cow.php");
require_once("Lion.php");

$objAnimal = new Animal("Herbivore", "grass");
$objCow = new Cow("Herbivore", "grass", "Jack");
$objLion = new Lion("Carnivore", "meat");
$objAnimal->setFamily("Omnivore");

echo $objAnimal->getFamily();
echo PHP_EOL;
echo $objAnimal->getFood();
echo PHP_EOL;
echo $objCow->getFamily();
echo PHP_EOL;
echo $objCow->getFood();
echo PHP_EOL;
echo $objCow->getOwner();
echo PHP_EOL;
echo $objLion->getFamily();
echo PHP_EOL;
echo $objLion->getFood();
echo PHP_EOL;
?>