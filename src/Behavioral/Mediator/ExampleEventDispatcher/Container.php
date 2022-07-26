<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Behavioral\Mediator\ExampleEventDispatcher;

class Container
{
    /**
     * @var EventDispatcher
     */
    private static EventDispatcher $eventDispatcher;

    /**
     * @return EventDispatcher
     */
    public static function getInstance(): EventDispatcher
    {
        if (!isset(self::$eventDispatcher)) {
            self::$eventDispatcher = new EventDispatcher();
        }
        return self::$eventDispatcher;
    }
}