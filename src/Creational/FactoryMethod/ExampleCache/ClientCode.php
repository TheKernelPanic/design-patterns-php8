<?php
declare(strict_types=1);

use DesignPatternsPhp8\Creational\FactoryMethod\ExampleCache\CacheService;
use DesignPatternsPhp8\Creational\FactoryMethod\ExampleCache\MemcachedService;
use DesignPatternsPhp8\Creational\FactoryMethod\ExampleCache\RedisService;

require_once __DIR__ . '/../../../../bootstrap.php';

function clientCode(CacheService $service) {
    $service->clear();
}

clientCode(
    service: new RedisService()
);
clientCode(
    service: new MemcachedService()
);