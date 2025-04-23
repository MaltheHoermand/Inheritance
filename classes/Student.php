<?php


class Student extends Person {

    public function __construct() {
        $this->set_kind_of_person("student");
    }
    public function greetings() {
        parent::greetings();
        echo "I'm going to Class...</br></br>";
    }
    public function go_to_classes() {

    }
}