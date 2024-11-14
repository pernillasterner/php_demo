<?php

require 'functions.php';
// require 'router.php';


// connect to our MySQL database.
// Initialize pdo

// Define a class. Class = Blueprint
class Person
{
    public $name;
    public $age;

    // Declare visability even if methods are visable by default
    public function breathe()
    {
        // Keyword that refereed to the current instants
        // This instans name for example
        echo $this->name . ' is breathing.';
    }
}

$person = new Person();

$person->name = 'John Doe';
$person->age = 25;

$person->breathe();
