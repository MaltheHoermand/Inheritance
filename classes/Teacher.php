<?php


class Teacher extends Person {


    private $subject;

    public function get_subject () {
        return $this->subject;
    }


    public function __construct() {
        $this->set_kind_of_person("teacher");
        $this->subject = "Mathematics";
    }
    public function greetings() {
        parent::greetings();
        echo "I will teach " . $this->get_subject() . ". Let the explanation begin...</br></br>";
    }
}