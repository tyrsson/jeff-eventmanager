<?php

declare(strict_types=1);

namespace Listener;

use Event\Notification;
use Laminas\EventManager\AbstractListenerAggregate;
use Laminas\EventManager\EventInterface;
use Laminas\EventManager\EventManagerInterface;

final class CompanyThree extends AbstractListenerAggregate
{

    public function attach(EventManagerInterface $events, $priority = 1)
    {
        $this->listeners[] = $events->attach(Notification::NOTIFY_CUSTOM, [$this, 'onCustomNotification']);
    }

    public function onCustomNotification(EventInterface $event)
    {
        // send notification
        return 'custom three';
    }

}
