<?php

class Campaign {
    private $segment;
    private $campaignPlans;
    private $dictionary;
    private $campaignTodo;
    /**
     *
     * @var ComTask
     */
    private $comTask;
    
    public function __construct() {
        $this->segment = $this->getSegment();
        $this->dictionary = $this->getDictionary();
        $this->campaignPlans = $this->getCampaignPlans();
        $this->campaignTodo = $this->getCampaignTodo();
    }
    
    private function getSegment() {
        return new Segment();
    }
    
    private function getDictionary() {
         return new Dictionary();
    }
    
    private function getCampaignPlans() {
         return new CampaignPlans();
    }
    
    private function getCampaignTodo() {
         return new CampaignTodo();
    }
    
    public function createComTask() {
        /**
         * Перенести в Dictonary
         */
        $campaignName = "";
        $segmentName = $this->segment->getSegmentName();
        $dicts = $this->dictionary->getDictionaryItems();
        foreach ($dicts as $val) {
            if ($val->getSegmentName() == $segmentName) {
                $campaignName = $val ->getCampaignName();
            }
        }
        if (empty($campaignName)) {
            throw new Exception("Компания не найдена", 500);
        }
        /**
         * Найти все планы кампании в массиве $campaignPlan класса CampaignPlans
         * по campaignName (реализовать в CampaignPlans )
         */
        
        /**
         * Создать массив tasks с элементами ComTask по найденным планам
         * И отправить в campaignTodo
         */
        //$task = new ComTask();        
    }
    
}