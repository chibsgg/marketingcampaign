<?php

class CampaignPlan {
    private $campaignName;
    private $dateStart;
    private $dateEnd;
    private $plan;
    private $msgTemplate;
    
    public function __construct($campaignName, $dateStart, $dateEnd, $plan, $msgTemplate) {
        $this->campaignName = $campaignName;
        $this->dateStart = $dateStart;
        $this->dateEnd = $dateEnd;
        $this->plan = $plan;
        $this->msgTemplate = $msgTemplate;
    }
    public function getPlan($campaignName){
       
    }
    
        
}