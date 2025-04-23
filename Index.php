<?php
require_once "classes/Dog.php";

$dog = new Dog();

$dog->set_sound("vov");
$dog->print_sound();