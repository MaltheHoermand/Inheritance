<?php
require_once "classes/Animal.php";
require_once "classes/Pet.php";

class Dog extends Pet
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->set_say_what("Vuf");
        $this->set_num_of_legs(4);
    }
}