<?php

class Dictionary {

    /**
     *
     * @var DictionaryItem
     */
    private $dictionaryItems = [];

    public function __construct() {
        $this->dictionaryItems[] = new DictionaryItem();
        $this->clients[] = new Client("Иванов Иван Иванович", "+7-000-000-00-00");
        $this->clients[] = new Client("Петров Петр Петрович", "+7-111-111-11-11");
    }

    public function getDictionaryItems() {
        return $this->dictionaryItems;
    }

    public function getCampaignNames($segmentName) {
        $campaignNames = [];
        foreach ($segmentNames as $segmentName) {
            foreach ($this->dictionaryItems as $val) {
                if ($val->getSegmentName() == $segmentName) {
                    $campaignNames[] = $val->getCampaignName();
                }
            }
        }

        if (empty($campaignNames)) {
            throw new Exception("Компания не найдена", 500);
        }
        return array_unique($campaignNames);
    }

}
