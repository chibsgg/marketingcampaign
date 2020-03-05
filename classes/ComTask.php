<?php

class ComTask {
    private $date;
    private $name;
    private $msgText;
    private $phoneNumber;
    private $complete;
    
    public function __construct($date, $name, $msgText, $phoneNumber) {
        $this->date = $date;
        $this->name = $name;
        $this->msgText = $msgText;
        $this->phoneNumber = $phoneNumber;
        $this->complete = false;
    }

    public function getDate() {
        return $this->date;
    }

    public function getName() {
        return $this->name;
    }

    public function getMsgText() {
        return $this->msgText;
    }

    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    public function getComplete() {
        return $this->complete;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setMsgText($msgText) {
        $this->msgText = $msgText;
    }

    public function setPhoneNumber($phoneNumber) {
        $this->phoneNumber = $phoneNumber;
    }

    public function setComplete($complete) {
        $this->complete = $complete;
    }
}

