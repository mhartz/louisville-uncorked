<?php namespace Uncorked\Newsletters;

use Illuminate\Support\ServiceProvider;

class NewsletterListServiceProvider extends ServiceProvider {

    public function register() {
        $this->app->bind(
            'Uncorked\Newsletters\NewsletterList',
            'Uncorked\Newsletters\Mailchimp\NewsletterList'
        );
    }
}