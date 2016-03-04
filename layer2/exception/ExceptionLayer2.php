<?php

namespace exceptions\layer2\exceptionLayer2;

use Exception;

/**
 * Class ExceptionLayer2
 * @package exceptions\layer2\exceptionLayer2
 */
class ExceptionLayer2  extends Exception{

    // Redefine the exception so message isn't optional
    public function __construct($message, $code = 20, Exception $previous = null) {
        // some code

        // make sure everything is assigned properly
        parent::__construct($message, $code, $previous);
    }

    // custom string representation of object
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

    public function customFunction() {
        echo "A custom function for this type of exception\n";
    }

}