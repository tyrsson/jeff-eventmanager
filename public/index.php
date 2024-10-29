<?php

declare(strict_types=1);

use Event\Notification;
use Laminas\EventManager\EventManager;
use Listener\CompanyOne;
use Listener\CompanyThree;
use Listener\CompanyTwo;

// Delegate static file requests back to the PHP built-in webserver
if (PHP_SAPI === 'cli-server' && $_SERVER['SCRIPT_FILENAME'] !== __FILE__) {
    return false;
}

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

/**
 * Self-called anonymous function that creates its own scope and keeps the global namespace clean.
 */
(function () {
    $knownListeners = [CompanyOne::class, CompanyTwo::class, CompanyThree::class];
    $em = new EventManager();
    foreach ($knownListeners as $listener) {
        (new $listener())->attach($em);
    }
    $data = require __DIR__ . '/../data/data.php';
    $notifications = new Notification(Notification::NOTIFY_CUSTOM, null, $data);
    $result = $em->triggerEvent($notifications);
})();