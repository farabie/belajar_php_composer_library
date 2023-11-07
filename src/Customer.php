<?php 

namespace BieProject\Library;

class Customer {
    public function __construct(private string $name) {

    }

    public function sayHello(string $name) {
        echo "Hello $name My name is $this->name";
    }
}


?>