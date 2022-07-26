<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Behavioral\Mediator\ExampleEventDispatcher;

use function file_exists;
use function unlink;
use function date;
use function file_put_contents;

class Logger implements Observable
{
    /**
     * @param string $filename
     */
    public function __construct(
        private string $filename
    )
    {
        if (file_exists($this->filename)) {
            unlink($this->filename);
        }
    }

    /**
     * @param string $event
     * @param object $emitter
     * @param $data
     * @return void
     */
    public function update(string $event, object $emitter, $data = null): void
    {
        $entry = date('Y-m-d H:i:s') . ":  '{$event}' \n";
        file_put_contents($this->filename, $entry, FILE_APPEND);
    }
}