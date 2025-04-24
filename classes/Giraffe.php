<?php
require_once "classes/Animal.php";


class Giraffe extends Animal
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->set_say_what("Snøft Snøft");
        $this->set_num_of_legs(4);
    }
}