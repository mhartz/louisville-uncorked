<?php
/**
 * Created by PhpStorm.
 * User: mshartz5
 * Date: 5/15/16
 * Time: 11:35 AM
 */

namespace Uncorked\Notifications;


interface UpcomingEvent
{
    /**
     * @param $title
     * @param $body
     * @return mixed
     */
    public function notify($title, $body);
}