<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Creational\FactoryMethod\ExampleCache;

interface CacheConnector
{
    /**
     * @return void
     */
    public function flushAll(): void;
}