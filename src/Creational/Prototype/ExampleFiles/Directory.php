<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Creational\Prototype\ExampleFiles;

class Directory
{
    /**
     * @var array
     */
    private array $files;

    /**
     * @param string $name
     */
    public function __construct(
        private string $name
    ) {
        $this->files = [];
    }

    /**
     * @param File $file
     */
    public function addFile(File $file): void
    {
        $this->files[] = $file;
    }

    /**
     * @return array
     */
    public function getFiles(): array
    {
        return $this->files;
    }
}