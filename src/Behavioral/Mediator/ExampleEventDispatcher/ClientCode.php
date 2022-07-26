<?php
declare(strict_types=1);

use DesignPatternsPhp8\Behavioral\Mediator\ExampleEventDispatcher\ClientRepository;
use DesignPatternsPhp8\Behavioral\Mediator\ExampleEventDispatcher\Container;
use DesignPatternsPhp8\Behavioral\Mediator\ExampleEventDispatcher\Logger;

require_once __DIR__ . '/../../../../bootstrap.php';

$repository = new ClientRepository();
Container::getInstance()->attach(
    observable: $repository
);

$logger = new Logger(
    filename: 'app.log'
);
Container::getInstance()->attach(
    observable: $logger
);

$repository->initialize();

$client = $repository->create(
    host: 'http://localhost'
);

$client->delete();
