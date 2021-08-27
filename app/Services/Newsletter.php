<?php

namespace App\Service;

use \MailchimpMarketing\ApiClient;

class Newsletter {
    public function subscribe(string $email, string $list = null )
    {
        $list ??= config('services.mailchimp.lists.subscribers');

        $mailchimp = new ApiClient();

        $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us5'
        ]);

        return $mailchimp->lists->addListMember($list, [
            'email_address' => $email,
            'status' => 'subscribed'
        ]);
    }
}
