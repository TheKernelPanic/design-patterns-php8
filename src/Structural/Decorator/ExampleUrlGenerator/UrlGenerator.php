<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Structural\Decorator\ExampleUrlGenerator;

interface UrlGenerator
{
    /**
     * @return string
     */
    public function generate(): string;
}