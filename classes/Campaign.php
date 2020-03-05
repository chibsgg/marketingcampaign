<?php

class Campaign {
    private $client;
    private $campaignPlans;
    private $dictionary;
    private $campaignTodo;
    /**
     *
     * @var ComTask
     */
    private $comTask;
    
    public function __construct() {
        $this->client = $this->getClient();
        $this->dictionary = $this->getDictionary();
        $this->campaignPlans = $this->getCampaignPlans();
        $this->campaignTodo = $this->getCampaignTodo();
    }
    
    private function getClient() {
        return new Client();
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
         * Получаем список имен кампаний
         */
        $campaignNames = $this->dictionary->getCampaignNames($this->client->getSegmentNames());
        /**
         * Найти все планы кампании в массиве $campaignPlan класса CampaignPlans
         * по campaignName (реализовать в CampaignPlans )
         */
        $plans = $this->campaignPlans->getCampaignPlans($campaignNames);
        /**
         * Создать массив tasks с элементами ComTask по найденным планам
         * И отправить в campaignTodo
         */
        $templates = [];
        foreach ($this->client->getSegments() as $segment) {
            foreach ($plans as $plan) {
                $date = new DateTime();
                $date->add($plan->getDateInterval());
                $templates[] = new Template($date, $plan->getMsgTemplate);
            }
        }
        $this->campaignTodo->createComTasks($templates, $this->client);
    }
    
}

//$d = new DateTime();
//echo $d->format('d-m-Y H:i:s') . "\n";
//$di = new DateInterval("PT30M");
//$d->add($di);
//echo $d->format('d-m-Y H:i:s') . "\n";