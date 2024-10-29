<?php

declare(strict_types=1);

namespace Event;

use Laminas\EventManager\Event;

class Notification extends Event
{
    final public const NOTIFY_CUSTOM = 'notification.custom';
    final public const NOTIFY_EMAIL  = 'notification.email';
    final public const NOTIFIY_PUSH  = 'notification.push';
}
