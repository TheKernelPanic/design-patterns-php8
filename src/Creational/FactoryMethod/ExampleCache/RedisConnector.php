<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Creational\FactoryMethod\ExampleCache;

class RedisConnector implements CacheConnector
{
    /**
     * @return void
     */
    public function flushAll(): void
    {
        echo "Flush all on Redis cache\n";
    }
}