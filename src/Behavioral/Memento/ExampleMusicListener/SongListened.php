<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Behavioral\Memento\ExampleMusicListener;

use DateTime;

class SongListened implements Listened
{
    /**
     * @var string
     */
    private string $date;

    /**
     * @param string $digest
     */
    public function __construct(
       private string $digest
    ) {
        $this->date = (new DateTime())->format(format: 'Y-m-d H:i:s');
    }

    /**
     * @return int
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Some title - Artist';
    }

    /**
     * @return string
     */
    public function getDigest(): string
    {
        return $this->digest;
    }
}