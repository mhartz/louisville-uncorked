<?php
/**
 * Created by PhpStorm.
 * User: mshartz5
 * Date: 4/5/16
 * Time: 11:27 PM
 */

namespace Uncorked\Newsletters;


interface NewsletterList
{

    /**
     * @param $list
     * @param $email
     * @return mixed
     */
    public function subscribeTo($list, $email);

    /**
     * @param $list
     * @param $email
     * @return mixed
     */
    public function unsubscribeFrom($list, $email);

}