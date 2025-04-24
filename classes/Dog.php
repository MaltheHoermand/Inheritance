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
        try {
            $this->set_say_what("Vuf");
            $this->set_num_of_legs(4);

        } catch (InvalidArgumentException $e) {
            echo "Argument exception: " . $e->getMessage();
        }

    }
}