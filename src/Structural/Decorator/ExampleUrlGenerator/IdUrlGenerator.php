<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Structural\Decorator\ExampleUrlGenerator;

class IdUrlGenerator extends UrlGeneratorDecorator
{
    /**
     * @return string
     */
    public function generate(): string
    {
        return parent::generate() . '/d35cb91b-dcd7-4e94-b38c-dc37b56ae91d';
    }
}