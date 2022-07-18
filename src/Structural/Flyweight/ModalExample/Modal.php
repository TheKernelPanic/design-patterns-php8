<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Structural\Flyweight\ModalExample;

class Modal
{
    /**
     * @param string $title
     * @param string $body
     * @param ModalConfiguration $configuration
     */
    public function __construct(
        private string $title,
        private string $body,
        private ModalConfiguration $configuration
    )
    {}

    /**
     * @return string
     */
    public function render(): string
    {
        return "
            <modal 
                width=\"{$this->configuration->getWidth()}\" 
                height=\"{$this->configuration->getHeight()}\"
            >
                <header>{$this->title}</header>
                <body>{$this->body}</body>
            </modal>
        ";
    }
}