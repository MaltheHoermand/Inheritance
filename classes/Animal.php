<?php



class Animal
{

    /**
     * @var String $say_what
     */
    protected $say_what;
    /**
     * @var Int $num_of_legs
     */
    protected $num_of_legs;

    /**
     * Sets $say_what property
     * @param $say_what
     * @return void
     */
    public function set_say_what ($say_what) {

        if (is_string($say_what)) {
            $this->say_what = $say_what;
        } else {
            throw new InvalidArgumentException("Argument must be a string");
        }

    }

    /**
     * Returns $say_what property
     * @return String
     */
    public function get_say_what () {
        return $this->say_what;
    }

    /**
     * Returns $num_of_legs property
     * @return Int
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
        if (is_int($num_of_legs)) {
            $this->num_of_legs = $num_of_legs;
        } else {
            throw new InvalidArgumentException("Argument must be an integer");
        }

    }

    /**
     * Prints a message for the animal.
     * @return void
     */
    public function print_say_what () {

        echo "Hi, I am a " . get_class($this) . ", and I say " . $this->say_what . ".</br></br>";

    }
}