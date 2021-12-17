<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Structural\Decorator\ExampleUrlGenerator;

class BaseUrlGenerator implements UrlGenerator
{
    /**
     * @param string $host
     */
    public function __construct(
        private string $host
    ) {}

    /**
     * @return string
     */
    public function generate(): string
    {
        return "https://{$this->host}";
    }
}