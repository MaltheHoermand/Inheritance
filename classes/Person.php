<?php



class Person{

    protected $name;
    protected $age;
    protected $kind_of_person;

    public function greetings () {
        echo "My name is ". $this->get_name() . ".</br>";
        echo "I am " . $this->get_age() . " years old.</br>";
        echo "I am a " . $this->kind_of_person . ".</br>";

    }
    public function get_name() {
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_age() {
        return $this->age;
    }
    public function set_age($age) {
        $this->age = $age;
    }
    public function get_kind_of_person() {
        return $this->kind_of_person;
    }
    public function set_kind_of_person($kind_of_person) {
        $this->kind_of_person = $kind_of_person;
    }

}