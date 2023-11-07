<?php 

namespace BieProject\Library;

class Customer {
    public function __construct(private string $name = "Guest") {

    }

    public function sayHello(string $name) {
        echo "Hello $name My name is $this->name";
    }
}


?>