<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Behavioral\Mediator\ExampleEventDispatcher;

interface Observable
{
    public function update(string $event, object $emitter, $data = null): void;
}