<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Behavioral\Memento\ExampleMusicListener;

interface Listened
{
    /**
     * @return int
     */
    public function getDate(): string;

    /**
     * @return string
     */
    public function getName(): string;
}