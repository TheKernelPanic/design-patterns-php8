<?php

namespace DesignPatternsPhp8\Behavioral\Mediator\ExampleEventDispatcher;

class ClientRepository implements Observable
{
    /**
     * @var array
     */
    private array $clients;

    /**
     *
     */
    public function __construct()
    {
        $this->clients = [];

        Container::getInstance()->attach(
            observable: $this,
            event: 'client:deleted'
        );
    }

    /**
     * @return void
     */
    public function initialize(): void
    {
        Container::getInstance()->trigger('clients:init', $this, '');
    }

    /**
     * @param string $host
     * @return Client
     */
    public function create(string $host): Client
    {
        $client = new Client(
            host: $host
        );
        Container::getInstance()->trigger('clients:created', $this, '');

        return $client;
    }

    public function delete(Client $client): void
    {
        // TODO: Remove client
    }

    /**
     * @param string $event
     * @param object $emitter
     * @param $data
     * @return void
     */
    public function update(string $event, object $emitter, $data = null): void
    {
        if ($event === 'clients:deleted') {
            if ($emitter !== $this && $data instanceof Client) {
                $this->delete(client: $data);
            }
        }
    }
}