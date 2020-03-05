<?php

class Template {
    private $date;
    private $msgTemplate;
    
    public function __construct($date, $msgTemplate) {
        $this->date = $date;
        $this->msgTemplate = $msgTemplate;
    }
    
    public function formatMsgText($name) {
        str_replace("%name%", $name, $this->msgTemplate);
    }
    
    public function getDate() {
        return $this->date;
    }

    public function getMsgTemplate() {
        return $this->msgTemplate;
    }
    
}

