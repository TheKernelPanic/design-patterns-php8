<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Behavioral\Memento\ExampleMusicListener;

use function hash, uniqid, time;

class MusicPlayer
{
    /**
     * @var string
     */
    private string $digest;

    /**
     *
     */
    public function __construct() {
        echo "Media player: Initialize with empty digest \n";
        $this->digest = '';
    }

    /**
     *
     */
    public function playMusic(): void
    {
        echo "Music player: Listening music... \n";
        $this->digest = $this->generateDigest();
        echo "Music player: Status has changed to <{$this->digest}>\n";
    }

    /**
     * @return string
     */
    private function generateDigest(): string
    {
        return hash('sha256', uniqid((string) time(), true));
    }

    /**
     * @return Listened
     */
    public function save(): Listened
    {
        return new SongListened(digest: $this->digest);
    }

    /**
     * @param Listened $listened
     */
    public function restore(Listened $listened): void
    {
        $this->digest = $listened->getDigest();
        echo "Music player: State changed to <{$this->digest}>\n";
    }
}