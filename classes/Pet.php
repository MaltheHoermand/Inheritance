<?php
require_once "classes/Animal.php";


class Pet extends Animal
{
    /**
     * @var String $pet_name
     */
    protected $pet_name;

    /**
     * Returns $pet_name property
     * @return String
     */
    public function get_pet_name () {
        return $this->pet_name;
    }

    /**
     * Sets $pet_name property
     * @param $pet_name
     * @return void
     */
    public function set_pet_name ($pet_name) {
        if (is_string($pet_name)) {
            $this->pet_name = $pet_name;
        } else {
            throw new InvalidArgumentException("Argument must be a string");
        }

    }

    /**
     * Prints pet message
     * @return void
     */
    public function print_pet_name () {
        echo "Come here " . $this->pet_name . ", you damn " . get_class($this) . " " . $this->get_say_what() . ".</br></br>";
    }
}