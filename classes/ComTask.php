<?php

class ComTask {
    private $date;
    private $name;
    private $msgText;
    private $phoneNumber;
    private $complete;
    
    function getDate() {
        return $this->date;
    }

    function getName() {
        return $this->name;
    }

    function getMsgText() {
        return $this->msgText;
    }

    function getPhoneNumber() {
        return $this->phoneNumber;
    }

    function getComplete() {
        return $this->complete;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setMsgText($msgText) {
        $this->msgText = $msgText;
    }

    function setPhoneNumber($phoneNumber) {
        $this->phoneNumber = $phoneNumber;
    }

    function setComplete($complete) {
        $this->complete = $complete;
    }
}

