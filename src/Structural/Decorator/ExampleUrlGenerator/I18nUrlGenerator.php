<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Structural\Decorator\ExampleUrlGenerator;

class I18nUrlGenerator extends UrlGeneratorDecorator
{
    /**
     * @var string
     */
    private string $isoCode = 'es';

    /**
     * @return string
     */
    public function generate(): string
    {
        return parent::generate() . '/' . $this->isoCode;
    }
}