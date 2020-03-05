<?php

class CampaignPlans {

    private $campaignPlan = [];

    function getCampaignPlan() {
        return $this->campaignPlan;
    }

    /**
     * 
     * @param String $campaignName
     * @return Array
     * @throws Exception
     */
    public function getCampaignPlans($campaignNames) {
        $plans = [];
        foreach ($campaignNames as $campaignName) {
            foreach ($this->campaignPlan as $val) {
                if ($val->getCampaignNames() == $campaignName) {
                    $plans[] = $val;
                }
            }
        }
        if (empty($plans)) {
            throw new Exception("Планы не найдены", 500);
        }
        return $plans;
    }
    
    private function getUnniquePlans($plans) {
        
    }

}
