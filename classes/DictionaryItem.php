<?php

class DictionaryItem {
    private $segmentName;
    private $campaignName;
    private $description;
    
    public function __construct($segmentName, $campaignName, $description) {
        $this->segmentName = $segmentName;
        $this->campaignName = $campaignName;
        $this->description = $description;
        
    }    
    
    function getSegmentName() {
        return $this->segmentName;
    }

    function getCampaignName() {
        return $this->campaignName;
    }

    function getDescription() {
        return $this->description;
    }


}
