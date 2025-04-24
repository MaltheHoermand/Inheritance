<?php
require_once "classes/Animal.php";
require_once "classes/Cat.php";
require_once "classes/Dog.php";
require_once "classes/Giraffe.php";

/**
 * Array containing animals
 */
$animals = [
    new Cat(),
    new Cat(),
    new Dog(),
    new Dog(),
    new Giraffe()
];
/**
 * setting pet names for the pets in the animal list
 */
$animals[0]->set_pet_name("Fluffy");
$animals[1]->set_pet_name("Whiskers");
$animals[2]->set_pet_name("Rolf");
$animals[3]->set_pet_name("Pjuske");

/**
 * Loops through animals array and runs relevant print methods
 */
foreach ($animals as $animal) {
    // checks if the animal os of the pet class and runs relevant print method
    if ($animal instanceof Pet) {
        $animal->print_pet_name();
    } else {
        $animal->print_say_what();
    }

}

