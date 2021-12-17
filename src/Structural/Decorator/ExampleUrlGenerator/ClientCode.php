<?php
declare(strict_types=1);

use DesignPatternsPhp8\Structural\Decorator\ExampleUrlGenerator\BaseUrlGenerator;
use DesignPatternsPhp8\Structural\Decorator\ExampleUrlGenerator\I18nUrlGenerator;
use DesignPatternsPhp8\Structural\Decorator\ExampleUrlGenerator\IdUrlGenerator;
use DesignPatternsPhp8\Structural\Decorator\ExampleUrlGenerator\SectionUrlGenerator;

require_once __DIR__ . '/../../../../bootstrap.php';

$baseUrlGenerator = new BaseUrlGenerator(host: 'localhost');
echo "Simple Url: \n";
echo "{$baseUrlGenerator->generate()} \n";

$decoratorI18nUrlGenerator = new I18nUrlGenerator(
    generator: $baseUrlGenerator
);
echo "First decorator: \n";
echo "{$decoratorI18nUrlGenerator->generate()} \n";

$decoratorSectionUrlGenerator = new SectionUrlGenerator(
    generator: $decoratorI18nUrlGenerator
);
echo "Second decorator: \n";
echo "{$decoratorSectionUrlGenerator->generate()} \n";

$decoratorIdUrlGenerator = new IdUrlGenerator(
  generator: $decoratorSectionUrlGenerator
);
echo "Third decorator: \n";
echo "{$decoratorIdUrlGenerator->generate()} \n";