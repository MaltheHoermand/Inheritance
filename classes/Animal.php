<?php

class Animal {
    protected $sound;

    public function set_sound($sound) {
        $this->sound = $sound;
    }
    public function print_sound() {
        echo "Hunden siger ".$this->sound;
    }
}