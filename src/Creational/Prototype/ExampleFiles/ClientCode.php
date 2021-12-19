<?php
declare(strict_types=1);

use DesignPatternsPhp8\Creational\Prototype\ExampleFiles\File;

require_once __DIR__ . '/../../../../bootstrap.php';

$directory = new \DesignPatternsPhp8\Creational\Prototype\ExampleFiles\Directory(name: 'Documents');
$file = new File(
    name: 'week-days',
    extension: 'txt',
    directory: $directory
);

$file->addLine(line: 'Monday');
$file->addLine(line: 'Tuesday');
$file->addLine(line: 'Wednesday');

$cloned = clone $file;

print_r($cloned);
