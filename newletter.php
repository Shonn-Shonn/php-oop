<?php 


interface Newsletter
{
    public function subscribe($email);
}

class CampaignMonitor implements Newsletter
{
    public function subscribe($email)
    {
        die('subscribing with Campaign Monitor.'.$email);
    }
}

class Drip implements Newsletter 
{
    public function subscribe($email)
    {
        die('subscribing with Drip'.$email);
    }
}

class NewsletterSubscriptionsController
{
    public function store($newLetter)
    {
        $email = 'phyumaung423@gmail.com';
        $newLetter->subscribe($email);
    }

}

$controller = new NewsletterSubscriptionsController();

$controller->store(new Drip());