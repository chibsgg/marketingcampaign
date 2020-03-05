<?php

class CampaignPlan {
    private $campaignName;
    private $dateStart; 
    private $dateEnd;
    private $dateInterval;
    private $msgTemplate;
    
    public function __construct($campaignName, $dateStart, $dateEnd, $dateInterval, $msgTemplate) {
        $this->campaignName = $campaignName;
        $this->dateStart = $dateStart;
        $this->dateEnd = $dateEnd;
        $this->dateInterval = $dateInterval;
        $this->msgTemplate = $msgTemplate;
    }  
    
    public function getCampaignName() {
        return $this->campaignName;
    }
    
    public function getDateStart() {
        return $this->dateStart;
    }

    public function getDateEnd() {
        return $this->dateEnd;
    }

    public function getDateInterval() {
        return $this->dateInterval;
    }

    public function getMsgTemplate() {
        return $this->msgTemplate;
    }


}