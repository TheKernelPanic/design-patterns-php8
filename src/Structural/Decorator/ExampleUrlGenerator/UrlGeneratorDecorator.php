<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Structural\Decorator\ExampleUrlGenerator;

class UrlGeneratorDecorator implements UrlGenerator
{
    /**
     * @param UrlGenerator $generator
     */
    public function __construct(
        protected UrlGenerator $generator
    ) {}

    /**
     * @return string
     */
    public function generate(): string
    {
        return $this->generator->generate();
    }
}