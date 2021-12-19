<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Creational\Prototype\ExampleFiles;

use DateTimeImmutable;

class File
{
    /**
     * @var DateTimeImmutable
     */
    private DateTimeImmutable $createdAt;

    /**
     * @var array
     */
    private array $lines;

    /**
     * @param string $name
     * @param string $extension
     * @param Directory $directory
     */
    public function __construct(
       private string $name,
       private string $extension,
       private Directory $directory
    ) {
        $this->directory->addFile(file: $this);
        $this->lines = [];
        $this->createdAt = new DateTimeImmutable;
    }

    /**
     * @param string $line
     */
    public function addLine(string $line): void
    {
        $this->lines[] = $line;
    }

    /**
     *
     */
    public function __clone(): void
    {
        $this->name = "COPY - {$this->name}";
        $this->directory->addFile(file: $this);
        $this->createdAt = new DateTimeImmutable;
    }
}