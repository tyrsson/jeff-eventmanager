<?php

declare(strict_types=1);

namespace Listener;

use Event\Notification;
use Laminas\EventManager\AbstractListenerAggregate;
use Laminas\EventManager\EventInterface;
use Laminas\EventManager\EventManagerInterface;

final class CompanyTwo extends AbstractListenerAggregate
{

    public function attach(EventManagerInterface $events, $priority = 1)
    {
        $this->listeners[] = $events->attach(Notification::NOTIFY_EMAIL, [$this, 'onEmail']);
    }

    public function onEmail(EventInterface $event)
    {
        return 'email';
    }
}
