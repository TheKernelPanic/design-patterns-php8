<?php
declare(strict_types=1);

use DesignPatternsPhp8\Creational\AbstractFactory\ExampleNotifications\Admin;
use DesignPatternsPhp8\Creational\AbstractFactory\ExampleNotifications\BackofficeNotificationFactory;
use DesignPatternsPhp8\Creational\AbstractFactory\ExampleNotifications\Client;
use DesignPatternsPhp8\Creational\AbstractFactory\ExampleNotifications\ClientNotificationFactory;
use DesignPatternsPhp8\Creational\AbstractFactory\ExampleNotifications\NotifierService;

require_once __DIR__ . '/../../../../bootstrap.php';

echo "Notify to admin \n";

$service = new NotifierService(
    user: new Admin()
);
$service->notity(
    factory: new BackofficeNotificationFactory()
);

echo "Notify to client user \n";

$service = new NotifierService(
    user: New Client()
);
$service->notity(
    factory: new ClientNotificationFactory()
);