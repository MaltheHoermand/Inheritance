<?php
require_once "classes/Animal.php";


class Pet extends Animal
{
    /**
     * @var $pet_name
     */
    protected $pet_name;

    /**
     * Returns $pet_name property
     * @return mixed
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
        $this->pet_name = $pet_name;
    }

    /**
     * Prints pet message
     * @return void
     */
    public function print_pet_name () {
        echo "Come here " . $this->pet_name . ", you damn " . get_class($this) . " " . $this->get_say_what() . ".</br></br>";
    }
}