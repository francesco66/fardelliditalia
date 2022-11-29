<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class Newsletter
{

    public function subscribe(string $email)
    {
        $mailchimp = new ApiClient();

        $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us13'
        ]);
        
        $list_id = config('services.mailchimp.list_id');
    
        return $mailchimp->lists->addListMember($list_id, [
            'email_address' => $email,
            'status' => 'subscribed'
        ]);
          
    }
}