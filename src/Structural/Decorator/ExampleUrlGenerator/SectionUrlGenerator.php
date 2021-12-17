<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Structural\Decorator\ExampleUrlGenerator;

class SectionUrlGenerator extends UrlGeneratorDecorator
{
    /**
     * @return string
     */
    public function generate(): string
    {
        return parent::generate() . '/section';
    }
}