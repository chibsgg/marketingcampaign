<?php

class Client {
    private $name;
    private $phoneNumber;

    public function __construct($name, $phoneNumber) {
        $this->name = $name;
        $this->phoneNumber = $phoneNumber;
    }
    
}