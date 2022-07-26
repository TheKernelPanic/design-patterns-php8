<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Behavioral\Mediator\ExampleEventDispatcher;

class Client
{
    /**
     * @param string $host
     */
    public function __construct(
        private string $host
    )
    {}

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @return void
     */
    public function delete(): void
    {
        Container::getInstance()->trigger('clients:deleted', $this, $this);
    }
}