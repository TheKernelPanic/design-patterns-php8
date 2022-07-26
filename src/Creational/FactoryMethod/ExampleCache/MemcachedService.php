<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Creational\FactoryMethod\ExampleCache;

class MemcachedService extends CacheService
{
    /**
     * @return CacheConnector
     */
    public function getConnector(): CacheConnector
    {
       return new MemcachedConnector();
    }
}