<?php namespace Uncorked\Notifications;

use Illuminate\Support\ServiceProvider;

class NotificationsServiceProvider extends ServiceProvider {
    public function register()
    {
        $this->app->bind(
            'Uncorked\Notitifications\UpcomingEvent',
            'Uncorked\Notitifications\Mailchimp\UpcomingEvent'
        );
    }
}