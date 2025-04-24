<?php
require_once "classes/Animal.php";


class Giraffe extends Animal
{
    /**
     * Constructor
     */
    public function __construct()
    {
        try {
            $this->set_say_what("Snøft Snøft");
            $this->set_num_of_legs(4);

        } catch (InvalidArgumentException $e) {
            echo "Argument exception: " . $e->getMessage();
        }

    }
}