<?php namespace Uncorked\Newsletters\Mailchimp;
/**
 * Created by PhpStorm.
 * User: mshartz5
 * Date: 4/5/16
 * Time: 11:31 PM
 */

use Mailchimp;
use Uncorked\Newsletters\NewsletterList as NewsLetterListInterface;

class NewsletterList implements NewsLetterListInterface {

    protected $mailchimp;

    protected $lists = [
        'lessonSubscribers' => '4d3cb9de6e'
    ];

    /**
     * NewsletterList constructor.
     * @param $mailchimp
     */
    public function __construct(Mailchimp $mailchimp)
    {
        $this->mailchimp = $mailchimp;
    }


    /**
     * Subscribe a user to the mailchimp list
     *
     * @param $listName
     * @param $email
     * @return mixed
     * @internal param $list
     */
    public function subscribeTo($listName, $email)
    {
        return $this->mailchimp->lists->subscribe(
            $this->lists[$listName],
            ['email' => $email],
            null, // merge vars,
            'html', // email type
            false, // require double opt in?
            true // update existing customers?
        );
    }

    /**
     * @param $list
     * @param $email
     * @return mixed
     */
    public function unsubscribeFrom($list, $email)
    {
        return $this->mailchimp->lists->subscribe(
            $this->lists[$listName],
            ['email' => $email],
            false, // delete the member permanently
            false, // send goodbye email?
            false // send unsubscribe notifitcation email?
        );
    }
}