<?php



class Animal
{

    /**
     * @var $say_what
     */
    protected $say_what;
    /**
     * @var $num_of_legs
     */
    protected $num_of_legs;

    /**
     * Sets $say_what property
     * @param $say_what
     * @return void
     */
    public function set_say_what ($say_what) {
        $this->say_what = $say_what;
    }

    /**
     * Returns $say_what property
     * @return mixed
     */
    public function get_say_what () {
        return $this->say_what;
    }

    /**
     * Returns $num_of_legs property
     * @return mixed
     */
    public function get_num_of_legs() {
        return $this->num_of_legs;
    }

    /**
     * Sets $num_of_legs property
     * @param $num_of_legs
     * @return void
     */
    public function set_num_of_legs ($num_of_legs) {
        $this->num_of_legs = $num_of_legs;
    }

    /**
     * Prints a message for the animal.
     * @return void
     */
    public function print_say_what () {

        echo "Hi, I am a " . get_class($this) . ", and I say " . $this->say_what . ".</br></br>";

    }
}