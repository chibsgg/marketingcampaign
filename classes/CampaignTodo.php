<?php

class CampaignTodo {

    private $comTasks = [];

    public function createComTasks($templates, $client) {
        foreach ($templates as $template) {
            $template->formatMsgText($client->getName());
            $this->comTasks[] = new ComTask(
                    $template->getDate(), 
                    $client->getName(), 
                    $template->getMsgTemplate(), 
                    $client->getPhoneNumber()
            );
        }
    }

}
