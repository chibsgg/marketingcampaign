<?php

class Client {
    /**
     *
     * @var Segment
     */
    private $segments = [];
    private $name;
    private $phoneNumber;

    public function __construct($name, $phoneNumber) {
        $this->name = $name;
        $this->phoneNumber = $phoneNumber;
    }
    
    public function getName() {
        return $this->name;
    }

    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    public function getSegments() {
        return $this->segments;
    }
    
    public function getSegmentNames() {
        $segmentNames = [];
        foreach ($this->segments as $segment) {
            $segmentNames[] = $segment ->getSegmentName();
        }
        return $segmentNames;
    }

}