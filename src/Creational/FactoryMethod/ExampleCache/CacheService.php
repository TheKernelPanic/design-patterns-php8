<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Creational\FactoryMethod\ExampleCache;

abstract class CacheService
{
    /**
     * @return CacheConnector
     */
    abstract protected function getConnector(): CacheConnector;

    /**
     * @return void
     */
    public function clear(): void
    {
        $this->getConnector()->flushAll();
    }
}