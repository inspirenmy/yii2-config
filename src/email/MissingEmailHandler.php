<?php
/**
 * @author: dep
 * Date: 09.02.16
 */

namespace inspirenmy\email;

use inspirenmy\config\core\MissingEvent;
use inspirenmy\config\core\MissingHandler;


class MissingEmailHandler extends MissingHandler
{
    /**
     * @inheritdoc
     */
    public static $fileStorage = 'missing_emails.php';

    /**
     * @inheritdoc
     */
    public static function parseAttributes(MissingEvent $event)
    {
        /**
         * @var MissingEmailEvent $event
         */
        return [
            $event->key => [
                'key' => $event->key,
                'subject' => $event->subject,
            ]
        ];
    }

}