<?php
/**
 * @author: dep
 * Date: 09.02.16
 */

namespace inspirenmy\config;

use inspirenmy\config\core\MissingEvent;
use inspirenmy\config\core\MissingHandler;


class MissingConfigHandler extends MissingHandler
{
    /**
     * @inheritdoc
     */
    public static function parseAttributes(MissingEvent $event)
    {
        /**
         * @var MissingConfigEvent $event
         */
        return [
            $event->key => [
                'key'   => $event->key,
                'value' => $event->value,
                'type'  => $event->type,
            ]
        ];
    }
}