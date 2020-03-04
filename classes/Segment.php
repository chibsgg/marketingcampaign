<?php

class Segment {
    /**
     *
     * @var Client
     */
    private $clients = [];
    private $segmentName;
    
    public function getSegmentName() {
        return $this->segmentName;
    }
    public function getClients() {
        return $this->clients;
    }
    public function __construct() {
        $this->segmentName = "SEGMENT1";
        $this->clients[] = new Client("Иванов Иван Иванович","+7-000-000-00-00" );
        $this->clients[] = new Client("Петров Петр Петрович","+7-111-111-11-11" );
    }
    
   
}