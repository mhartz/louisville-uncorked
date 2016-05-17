<?php
/**
 * Created by PhpStorm.
 * User: mshartz5
 * Date: 5/15/16
 * Time: 11:38 AM
 */

namespace Uncorked\Notifications\Mailchimp;

use Mailchimp;

class UpcomingEvent implements \Uncorked\Notifications\UpcomingEvent
{

    const LESSON_SUBSCRIBERS_ID = '4d3cb9de6e';
    protected $mailchimp;

    /**
     * UpcomingEvent constructor.
     * @param $mailchimp
     */
    public function __construct(Mailchimp $mailchimp)
    {
        $this->mailchimp = $mailchimp;
    }


    /**
     * @param $title
     * @param $body
     * @return mixed
     */
    public function notify($title, $body)
    {
        $options = [
            'list_id' => self::LESSON_SUBSCRIBERS_ID,
            'subject' => 'Upcoming Event: ' . $title,
            'from_name' => 'Nikki Carver',
            'from_email' => 'mshartz5@gmail.com',
            'to_name' => 'Louisville Uncorked Subscriber'
        ];

        $content = [
            'html' => $body,
            'text' => strip_tags($body)
        ];

        $compaign = $this->mailchimp->campaigns->create('regular', $options, $content);

        $this->mailchimp->campaigns->send($campaign['id']);
    }
}