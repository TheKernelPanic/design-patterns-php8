<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Behavioral\Mediator\ExampleEventDispatcher;

use function array_merge;

class EventDispatcher
{
    /**
     * @var array
     */
    private array $observables;

    public function __construct()
    {
        $this->observables['*'] = [];
    }

    /**
     * @param string $event
     * @return void
     */
    private function initEventGroup(string $event = '*'): void
    {
        if (isset($this->observables[$event])) {
            return;
        }
        $this->observables[$event] = [];
    }

    /**
     * @param string $event
     * @return array
     */
    private function getEventObservers(string $event = '*'): array
    {
        $this->initEventGroup(event: $event);
        $group = $this->observables[$event];
        $all = $this->observables['*'];

        return array_merge($group, $all);
    }

    public function attach(Observable $observable, string $event = '*'): void
    {
        $this->initEventGroup(event: $event);
        $this->observables[$event][] = $observable;
    }

    /**
     * @param Observable $observable
     * @param string $event
     * @return void
     */
    public function detach(Observable $observable, string $event = '*'): void
    {
        foreach ($this->getEventObservers($event) as $key => $value) {
            if ($value === $observable) {
                unset($this->observables[$event][$key]);
            }
        }
    }

    /**
     * @param string $event
     * @param object $emitter
     * @param $data
     * @return void
     */
    public function trigger(string $event, object $emitter, $data = null): void
    {
        echo "EventDispatcher: Broadcasting the {$event} event.\n";
        foreach ($this->getEventObservers($event) as $observer) {
            $observer->update($event, $emitter, $data);
        }
    }
}